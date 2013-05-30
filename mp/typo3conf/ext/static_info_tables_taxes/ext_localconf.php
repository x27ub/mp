<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if (!defined ('STATIC_INFO_TABLES_TAXES_EXTkey')) {
	define('STATIC_INFO_TABLES_TAXES_EXTkey',$_EXTKEY);
}

if (!defined ('STATIC_INFO_TABLES_EXTkey')) {
	define('STATIC_INFO_TABLES_EXTkey','static_info_tables');
}

if (!defined ('PATH_BE_staticinfotablestaxes')) {
	define('PATH_BE_staticinfotablestaxes', t3lib_extMgm::extPath(STATIC_INFO_TABLES_TAXES_EXTkey));
}

if (!defined ('PATH_BE_staticinfotablestaxes_rel')) {
	define('PATH_BE_staticinfotablestaxes_rel', t3lib_extMgm::extRelPath(STATIC_INFO_TABLES_TAXES_EXTkey));
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][STATIC_INFO_TABLES_EXTkey]['tables']['static_taxes'] = array(
	'static_taxes' => array(
		'label_fields' => array(
			'tx_name_##', 'tx_name_en',
		),
		'isocode_field' => array(
			'tx_code', 'tx_country_iso_##', 'tx_zn_code',
		),
	),
);

?>