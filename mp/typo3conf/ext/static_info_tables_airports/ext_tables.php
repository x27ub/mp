<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

$TCA["static_airports"] = Array (
    "ctrl" => Array (
        "title" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports",        
        "label" => "ap_short_name_en",
		"readOnly" => 1,	// This should always be true, as it prevents the static data from being altered
//		"adminOnly" => 1,	// Only admin, if any
		"rootLevel" => 1,
		"is_static" => 1,
		"default_sortby" => "ORDER BY ap_short_name_en",        
		"dynamicConfigFile" => t3lib_extMgm::extPath($_EXTKEY)."tca.php",
        "iconfile" => t3lib_extMgm::extRelPath($_EXTKEY)."icon_static_airports.gif",
    ),
    "feInterface" => Array (
        "fe_admin_fieldList" => "ap_country_iso_2, ap_country_iso_3, ap_country_iso_nr, ap_code, ap_short_name_en, ap_long_name_en, ap_longitude, ap_latitude",
    )
);

?>
