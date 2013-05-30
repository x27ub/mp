<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// t3lib_extMgm::addStaticFile(STATIC_INFO_TABLES_EXTkey, 'static/', 'Static Info tables taxes');

$TCA['static_taxes'] = Array (
	'ctrl' => Array (
		'label' => 'tx_name_en',
		'type' => 'tx_scope',
		'readOnly' => 1,
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'default_sortby' => 'ORDER BY tx_name_en',
		'crdate' => 'crdate',
		'delete' => 'deleted',
		'enablecolumns' => Array (
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'title' => 'LLL:EXT:'.STATIC_INFO_TABLES_TAXES_EXTkey.'/locallang_db.xml:static_taxes.title',
		'dynamicConfigFile' => PATH_BE_staticinfotablestaxes.'tca.php',
		'iconfile' => PATH_BE_staticinfotablestaxes_rel.'ext_icon.gif',
	),
	'interface' => Array (
		'showRecordFieldList' => 'tx_name_en,tx_scope,tx_code,tx_country_iso_3,tx_country_iso_2,tx_country_iso_nr,tx_zn_code,tx_class,tx_rate,tx_priority,crdate,hidden,starttime,endtime'
	)
);

$TCA['static_taxes']['ctrl']['readOnly'] = 0;

?>