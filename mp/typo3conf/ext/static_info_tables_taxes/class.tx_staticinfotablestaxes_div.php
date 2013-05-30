<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2004-2008 Stanislas Rolland <stanislas.rolland(arobas)sjbr.ca>
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * static info tables for taxes
 *
 * $Id$
 *
 * @author	Stanislas Rolland <stanislas.rolland(arobas)sjbr.ca>
 * @package TYPO3
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   44: class tx_staticinfotablestaxes_div
 *   59:     function applyConsumerTaxes(&$staticInfo, $amount, $taxClass=0, $shopCountryCode, $shopCountrySubdivisionCode, $buyerCountryCode, $buyerCountrySubdivisionCode, $EUThreshold=0)
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
class tx_staticinfotablestaxes_div {

	/**
	 * Applying taxes to a given amount
	 *
	 * @param	object		object of the class tx_staticinfotables_pi1
	 * @param	float		An amount to which taxes should be applied
	 * @param	integer		The class of taxation of the product
	 * @param	string		The ISO alpha-3 code of the country of the selling shop
	 * @param	string		The country subdivision code of the region of the selling shop
	 * @param	string		The ISO alpha-3 code of the country of the buying consumer
	 * @param	string		The country subdivision code of the region of the buying consumer
	 * @param	boolean		Should be set if the shop has sales of goods beyond the regulatory threshold in the buyer's country (when both shop and buyer in EU)
	 * @return	array		An array of 4-plets of applied taxes: ('tx_name','tx_rate','tx_amount','tx_priority')
	 */
	function applyConsumerTaxes(&$staticInfo, $amount, $taxClass=0, $shopCountryCode, $shopCountrySubdivisionCode, $buyerCountryCode, $buyerCountrySubdivisionCode, $EUThreshold=0)	{
		global $TYPO3_DB;

		$appliedTaxesIndex = 0;
		$appliedTaxes = array();
		$shopCountryCode = ($shopCountryCode) ? $shopCountryCode : $staticInfo->defaultCountry;
		$buyerCountryCode = ($buyerCountryCode) ? $buyerCountryCode : $staticInfo->defaultCountry;

			// Not taxable!
		if (!$taxClass || !trim($shopCountryCode) || !trim($buyerCountryCode)) {
			return $appliedTaxes;
		}

			// Get national taxes
		if (trim($shopCountryCode) == trim($buyerCountryCode)) {
			$res = $TYPO3_DB->exec_SELECTquery(
				'*',
				'static_taxes',
				'tx_country_iso_3='.$TYPO3_DB->fullQuoteStr(trim($shopCountryCode),'static_taxes').
					' AND tx_scope="1"'.
					' AND (tx_class='.$TYPO3_DB->fullQuoteStr($taxClass,'static_taxes').' OR tx_class="3")'.
					$staticInfo->enableFields('static_taxes')
			);
			while($row = $TYPO3_DB->sql_fetch_assoc($res))	{
				$appliedTaxes[$appliedTaxesIndex] = array();
				$appliedTaxes[$appliedTaxesIndex]['tx_name'] =  $staticInfo->getStaticInfoName('TAXES', $row['tx_code'], trim($shopCountryCode));
				$appliedTaxes[$appliedTaxesIndex]['tx_rate'] = doubleval($row['tx_rate']);
				$appliedTaxes[$appliedTaxesIndex]['tx_priority'] = $row['tx_priority'];
				$appliedTaxesIndex++;
			}
			$TYPO3_DB->sql_free_result($res);

	 			// Get state or provincial taxes
			if( trim($shopCountrySubdivisionCode) && trim($buyerCountrySubdivisionCode) &&  trim($shopCountrySubdivisionCode) == trim($buyerCountrySubdivisionCode) ) {
				$res = $TYPO3_DB->exec_SELECTquery(
					'*',
					'static_taxes',
					'tx_country_iso_3='.$TYPO3_DB->fullQuoteStr(trim($shopCountryCode),'static_taxes').
						' AND tx_zn_code='.$TYPO3_DB->fullQuoteStr(trim($shopCountrySubdivisionCode),'static_taxes').
						' AND tx_scope="2"'.
						' AND (tx_class='.$TYPO3_DB->fullQuoteStr($taxClass,'static_taxes').' OR tx_class="3")'.
						$staticInfo->enableFields('static_taxes')
				);
				while($row = $TYPO3_DB->sql_fetch_assoc($res))	{
					$appliedTaxes[$appliedTaxesIndex] = array();
					$appliedTaxes[$appliedTaxesIndex]['tx_name'] =  $staticInfo->getStaticInfoName('SUBTAXES', $row['tx_code'], trim($shopCountryCode), trim($shopCountrySubdivisionCode));
					$appliedTaxes[$appliedTaxesIndex]['tx_rate'] = doubleval($row['tx_rate']);
					$appliedTaxes[$appliedTaxesIndex]['tx_priority'] = $row['tx_priority'];
					$appliedTaxesIndex++;
				}
				$TYPO3_DB->sql_free_result($res);
			}
		} else	{
	 			// Apply EU Internal Market rules for under threshold sales
			$res = $TYPO3_DB->exec_SELECTquery(
				'cn_eu_member',
				'static_countries',
				'cn_iso_3='.$TYPO3_DB->fullQuoteStr(trim($shopCountryCode),'static_countries')
			);
			$row = $TYPO3_DB->sql_fetch_assoc($res);
			$TYPO3_DB->sql_free_result($res);
			$shop_cn_eu_member = $row['cn_eu_member'];
			if ($shop_cn_eu_member) {
				$res = $TYPO3_DB->exec_SELECTquery(
					'cn_eu_member',
					'static_countries',
					'cn_iso_3='.$TYPO3_DB->fullQuoteStr(trim($buyerCountryCode),'static_countries')
				);
				$row = $TYPO3_DB->sql_fetch_assoc($res);
				$TYPO3_DB->sql_free_result($res);
				$buyer_cn_eu_member = $row['cn_eu_member'];
				if ($buyer_cn_eu_member) {
							// Here we apply the rules of the European Union Internal Market
					$taxCountryCode = trim($shopCountryCode);
					if ($taxClass == '1' && $EUThreshold)	{
						$taxCountryCode = trim($buyerCountryCode);
					}
					$res = $TYPO3_DB->exec_SELECTquery(
						'*',
						'static_taxes',
						'tx_country_iso_3='.$TYPO3_DB->fullQuoteStr($taxCountryCode,'static_taxes').
							' AND tx_scope="1"'.
							' AND (tx_class='.$TYPO3_DB->fullQuoteStr($taxClass,'static_taxes').' OR tx_class="3")'.
							$staticInfo->enableFields('static_taxes')
					);
					while($row = $TYPO3_DB->sql_fetch_assoc($res))	{
						$appliedTaxes[$appliedTaxesIndex] = array();
						$appliedTaxes[$appliedTaxesIndex]['tx_name'] =  $staticInfo->getStaticInfoName('TAXES', $row['tx_code'], trim($shopCountryCode));
						$appliedTaxes[$appliedTaxesIndex]['tx_rate'] = doubleval($row['tx_rate']);
						$appliedTaxes[$appliedTaxesIndex]['tx_priority'] = $row['tx_priority'];
						$appliedTaxesIndex++;
					}
					$TYPO3_DB->sql_free_result($res);
				}
			}
		}

			// Apply rates
		if( count($appliedTaxes) )	{
			foreach ($appliedTaxes as $key => $row) {
				$priority[$key] = $row['tx_priority'];
			}
			array_multisort($priority, SORT_ASC, $appliedTaxes);
			$priority = $priority['0'];
			$appliedTaxesAmount = $amount;
			$baseAmount = $appliedTaxesAmount;
			foreach ($appliedTaxes as $key => $row) {
				if( $row['tx_priority'] > $priority ) {
					$baseAmount = $appliedTaxesAmount;
					$priority = $row['tx_priority'];
				}
				$taxedAmount = $row['tx_rate']*$baseAmount;
				$appliedTaxes[$key]['tx_amount'] = round($taxedAmount, ceil(0 - log10($taxedAmount)) + $staticInfo->currencyInfo['cu_decimal_digits']);
				$appliedTaxesAmount += $appliedTaxes[$key]['tx_amount'];
			}
		}
		return $appliedTaxes;
	}
}


if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/static_info_tables_taxes/class.tx_staticinfotablestaxes_div.php'])    {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/static_info_tables_taxes/class.tx_staticinfotablestaxes_div.php']);
}
?>