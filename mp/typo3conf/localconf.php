<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['SYS']['sitename'] = 'minipackage';

	// Default password is "joh316" :
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';

$TYPO3_CONF_VARS['EXT']['extList'] = 'info,perm,func,filelist,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports,felogin';

$typo_db_extTableDef_script = 'extTables.php';

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

$TYPO3_CONF_VARS['EXT']['extList'] = 'css_styled_content,info,perm,func,filelist,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,felogin,scheduler,rsaauth,saltedpasswords,t3quixplorer,tt_news,indexed_search,realurl,static_info_tables,static_info_tables_airports,static_info_tables_taxes,wt_spamshield,powermail';	// Modified or inserted by TYPO3 Extension Manager. Modified or inserted by TYPO3 Core Update Manager. 
// Updated by TYPO3 Core Update Manager 30-08-12 12:27:40
$TYPO3_CONF_VARS['SYS']['encryptionKey'] = 'b5247e8eea7809477c42247288280cca90c51ad3c4fdfd421501c1d9f0c58baabdfc652bb1f6095d8bca3764470ed14c';	// Modified or inserted by TYPO3 Install Tool. 
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.5';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_username = 'user';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_password = 'path';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_host = '127.0.0.1';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db = 'db';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['disable_exec_function'] = '0';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['gdlib_png'] = '1';	// Modified or inserted by TYPO3 Install Tool. 
$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'im6';	// Modified or inserted by TYPO3 Install Tool. 
$TYPO3_CONF_VARS['GFX']['TTFdpi'] = '96';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['curlUse'] = '1';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['lockSSL'] = '0';	// Modified or inserted by TYPO3 Install Tool. 
$TYPO3_CONF_VARS['BE']['explicitADmode'] = 'explicitAllow';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = '0';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 30-08-12 12:38:26
$TYPO3_CONF_VARS['EXT']['extList_FE'] = 'css_styled_content,version,install,rtehtmlarea,t3skin,felogin,rsaauth,saltedpasswords,t3quixplorer,tt_news,indexed_search,realurl,static_info_tables,static_info_tables_airports,static_info_tables_taxes,wt_spamshield,powermail';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['t3quixplorer'] = 'a:10:{s:9:"no_access";s:0:"";s:11:"show_hidden";s:1:"1";s:8:"home_url";s:0:"";s:8:"home_dir";s:0:"";s:11:"show_thumbs";s:1:"0";s:15:"textarea_height";s:2:"40";s:14:"auto_highlight";s:1:"1";s:12:"disable_text";s:1:"1";s:12:"editable_ext";s:228:"\\.phpcron$|\\.ts$|\\.tmpl$|\\.txt$|\\.php$|\\.php3$|\\.phtml$|\\.inc$|\\.sql$|\\.pl$|\\.htm$|\\.html$|\\.shtml$|\\.dhtml$|\\.xml$|\\.js$|\\.css$|\\.cgi$|\\.cpp$\\.c$|\\.cc$|\\.cxx$|\\.hpp$|\\.h$|\\.pas$|\\.p$|\\.java$|\\.py$|\\.sh$\\.tcl$|\\.tk$|\\.txt$|\\.ts$";s:8:"php_path";s:12:"/usr/bin/php";}';	// Modified or inserted by TYPO3 Extension Manager. 
// Updated by TYPO3 Extension Manager 30-08-12 12:50:50
//$TYPO3_CONF_VARS['BE']['installToolPassword'] = '56a8e86bcee4dcb3be2bb324ab9855e9';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 24-10-12 11:25:23
$TYPO3_CONF_VARS['EXT']['extConf']['scheduler'] = 'a:3:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['rsaauth'] = 'a:1:{s:18:"temporaryDirectory";s:41:"/kunden/homepages/4/d371431980/htdocs/rsa";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}';	//  Modified or inserted by TYPO3 Extension Manager.
// Updated by TYPO3 Extension Manager 25-10-12 09:34:02
$TYPO3_CONF_VARS['BE']['loginSecurityLevel'] = 'rsa';	// Modified or inserted by TYPO3 Install Tool. 
$TYPO3_CONF_VARS['FE']['loginSecurityLevel'] = 'normal';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['im_combine_filename'] = 'composite';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['lockRootPath'] = '';	// Modified or inserted by TYPO3 Install Tool. 
// Updated by TYPO3 Install Tool 28-10-12 14:35:25
$TYPO3_CONF_VARS['EXT']['extConf']['tt_news'] = 'a:20:{s:13:"useStoragePid";s:1:"1";s:17:"requireCategories";s:1:"0";s:18:"useInternalCaching";s:1:"1";s:11:"cachingMode";s:6:"normal";s:13:"cacheLifetime";s:1:"0";s:13:"cachingEngine";s:8:"internal";s:11:"treeOrderBy";s:3:"uid";s:13:"prependAtCopy";s:1:"1";s:5:"label";s:5:"title";s:9:"label_alt";s:0:"";s:10:"label_alt2";s:0:"";s:15:"label_alt_force";s:1:"0";s:21:"categorySelectedWidth";s:1:"0";s:17:"categoryTreeWidth";s:1:"0";s:25:"l10n_mode_prefixLangTitle";s:1:"1";s:22:"l10n_mode_imageExclude";s:1:"1";s:20:"hideNewLocalizations";s:1:"0";s:24:"writeCachingInfoToDevlog";s:10:"disabled|0";s:23:"writeParseTimesToDevlog";s:1:"0";s:18:"parsetimeThreshold";s:3:"0.1";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['indexed_search'] = 'a:17:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['realurl'] = 'a:5:{s:10:"configFile";s:25:"typo3conf/realurlconf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['wt_spamshield'] = 'a:10:{s:12:"useNameCheck";s:1:"1";s:12:"usehttpCheck";s:1:"3";s:9:"notUnique";s:21:"first name, last name";s:13:"honeypodCheck";s:1:"1";s:15:"useSessionCheck";s:1:"1";s:16:"SessionStartTime";s:2:"10";s:14:"SessionEndTime";s:3:"600";s:10:"AkismetKey";s:0:"";s:12:"email_notify";s:15:"x27ub@yahoo.com";s:3:"pid";s:1:"8";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['static_info_tables'] = 'a:1:{s:7:"charset";s:5:"utf-8";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['powermail'] = 'a:8:{s:10:"usePreview";s:1:"1";s:12:"cssSelection";s:1:"1";s:14:"feusersPrefill";s:70:"name, address, telephone, fax, email, zip, city, country, www, company";s:12:"disableIPlog";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:16:"disableStartStop";s:1:"0";s:7:"useIRRE";s:1:"1";s:12:"fileToolPath";s:9:"/usr/bin/";}';	//  Modified or inserted by TYPO3 Extension Manager.
// Updated by TYPO3 Extension Manager 16-05-13 14:55:12
$TYPO3_CONF_VARS['BE']['sessionTimeout'] = '86400';	// Modified or inserted by TYPO3 Install Tool. 
// Updated by TYPO3 Install Tool 28-05-13 21:32:40
?>
