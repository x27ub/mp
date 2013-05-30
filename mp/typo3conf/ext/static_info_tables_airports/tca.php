<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");


$TCA["static_airports"] = Array (
    "ctrl" => $TCA["static_airports"]["ctrl"],
    "interface" => Array (
        "showRecordFieldList" => "ap_country_iso_2, ap_country_iso_3, ap_country_iso_nr, ap_code,ap_short_name_en,ap_long_name_en,ap_longitude,ap_latitude"
    ),
    "feInterface" => $TCA["static_airports"]["feInterface"],
    "columns" => Array (
      "ap_country_iso_2" => Array (
         "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_country_iso_2",
         "exclude" => "0",
         "config" => Array (
            "type" => "input",
            "size" => "4",
            "max" => "2",
            "eval" => "",
            "default" => ""
         )
      ),
      "ap_country_iso_3" => Array (
         "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_country_iso_3",
         "exclude" => "0",
         "config" => Array (
            "type" => "input",
            "size" => "5",
            "max" => "3",
            "eval" => "",
            "default" => ""
         )
      ),
      "ap_country_iso_nr" => Array (
         "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_country_iso_nr",
         "exclude" => "0",
         "config" => Array (
            "type" => "input",
            "size" => "7",
            "max" => "7",
            "eval" => "int",
            "default" => "0"
         )
      ),
	  

        "ap_code" => Array (
            "exclude" => 0,
            "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_id",
            "config" => Array (
                "type" => "input",    
                "size" => "5",    
                "max" => "3",    
                "eval" => "trim",
            )
        ),
        "ap_short_name_en" => Array (        
            "exclude" => 0,        
            "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_short_name_en",        
            "config" => Array (
                "type" => "input",    
                "size" => "30",    
                "max" => "45",    
                "eval" => "trim",
            )
        ),
        "ap_long_name_en" => Array (        
            "exclude" => 0,        
            "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_long_name_en",        
            "config" => Array (
                "type" => "input",    
                "size" => "30",    
                "max" => "127",    
                "eval" => "trim",
            )
        ),
        "ap_longitude" => Array (        
            "exclude" => 0,        
            "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_longitude",        
            "config" => Array (
                "type" => "input",    
                "size" => "10",
                "max" => "20",
                "eval" => "double",
                "range" => Array (
                    "upper" => "90",
                    "lower" => "-90"
                ),
                "default" => 0
            )
        ),
        "ap_latitude" => Array (        
            "exclude" => 0,
            "label" => "LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.ap_latitude",
            "config" => Array (
                "type" => "input",    
                "size" => "10",
                "max" => "20",
                "eval" => "double",
                "range" => Array (
                    "upper" => "180",
                    "lower" => "-180"
                ),
                "default" => 0
            )
        ),
    ),
    "types" => Array (
        "0" => Array(
			"showitem" => "ap_code;;;;1-1-1, ap_short_name_en, ap_long_name_en, ap_longitude;;;;2-2-2, ap_latitude,--palette--;LLL:EXT:static_info_tables_airports/locallang_db.php:tx_staticinfotablesairports.country_ref;1;;3-3-3"
      )
   ),
   "palettes"	=> Array (
		"1" => Array(
			"showitem" => "ap_country_iso_nr,ap_country_iso_2,ap_country_iso_3", "canNotCollapse" => "1"
		)
	)
);

?>
