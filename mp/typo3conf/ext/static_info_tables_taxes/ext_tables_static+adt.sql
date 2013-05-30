# TYPO3 Extension Manager dump 1.1
#
#--------------------------------------------------------


#
# Table structure for table "static_taxes"
#
DROP TABLE IF EXISTS static_taxes;
CREATE TABLE static_taxes (
  uid int(11) unsigned auto_increment,
  pid int(11) unsigned default '0',
  crdate int(11) unsigned default '0',
  deleted tinyint(4) unsigned default '0',
  hidden tinyint(4) unsigned default '0',
  starttime int(11) unsigned default '0',
  endtime int(11) unsigned default '0',
  tx_country_iso_nr int(11) unsigned default '0',
  tx_country_iso_2 char(2) default '',
  tx_country_iso_3 char(3) default '',
  tx_zn_code varchar(45) default '',
  tx_name_en varchar(255) default '',
  tx_scope tinyint(3) unsigned default '0',
  tx_code varchar(5) default '',
  tx_class tinyint(3) unsigned default '0',
  tx_rate varchar(20) default '',
  tx_priority tinyint(3) unsigned default '0',
  PRIMARY KEY (uid),
  KEY parent (pid)
);


INSERT INTO static_taxes VALUES ('1', '0', '1078592928', '0', '0', '0', '0', '124', 'CA', 'CAN', 'SK', 'Saskatchewan Retail Sales Tax', '2', 'SKRST', '3', '0.06', '1');
INSERT INTO static_taxes VALUES ('2', '0', '1078593040', '0', '0', '0', '0', '124', 'CA', 'CAN', 'QC', 'Québec Sales Tax', '2', 'TVQ', '3', '0.075', '2');
INSERT INTO static_taxes VALUES ('3', '0', '1078630120', '0', '0', '0', '0', '124', 'CA', 'CAN', '', 'Canada Goods and Services Tax', '1', 'GST', '3', '0.07', '1');
INSERT INTO static_taxes VALUES ('4', '0', '1078630420', '0', '0', '0', '0', '124', 'CA', 'CAN', 'MB', 'Manitoba Retail Sales Tax', '2', 'MBRST', '3', '0.07', '1');
INSERT INTO static_taxes VALUES ('5', '0', '1078630556', '0', '0', '0', '0', '124', 'CA', 'CAN', 'BC', 'British Columbia Retail Sales Tax', '2', 'BCRST', '3', '0.075', '1');
INSERT INTO static_taxes VALUES ('6', '0', '1078630731', '0', '0', '0', '0', '124', 'CA', 'CAN', 'ON', 'Ontario Retail Sales Tax', '2', 'ONRST', '3', '0.08', '1');
INSERT INTO static_taxes VALUES ('7', '0', '1078631374', '0', '0', '0', '0', '124', 'CA', 'CAN', 'NB', 'New Brunswick Harmonized Sales Tax', '2', 'HST', '3', '0.08', '1');
INSERT INTO static_taxes VALUES ('8', '0', '1078631540', '0', '0', '0', '0', '124', 'CA', 'CAN', 'NS', 'Nova Scotia Harmonized Sales Tax', '2', 'HST', '3', '0.08', '1');
INSERT INTO static_taxes VALUES ('9', '0', '1078631644', '0', '0', '0', '0', '124', 'CA', 'CAN', 'PE', 'Prince Edward Island Retail Sales Tax', '2', 'PERST', '3', '0.1', '2');
INSERT INTO static_taxes VALUES ('10', '0', '1078631800', '0', '0', '0', '0', '124', 'CA', 'CAN', 'NL', 'Newfoundland and Labrador Harmonized Sales Tax', '2', 'HST', '3', '0.08', '1');
INSERT INTO static_taxes VALUES ('11', '0', '1078671742', '0', '0', '0', '0', '56', 'BE', 'BEL', '', 'Belgium VAT', '1', 'VAT', '3', '0.21', '1');
INSERT INTO static_taxes VALUES ('12', '0', '1078672536', '0', '0', '0', '0', '203', 'CZ', 'CZE', '', 'Czech Republic VAT', '1', 'GST', '3', '0.22', '1');
INSERT INTO static_taxes VALUES ('13', '0', '1078672881', '0', '0', '0', '0', '208', 'DK', 'DNK', '', 'Denmark VAT', '1', 'VAT', '3', '0.25', '1');
INSERT INTO static_taxes VALUES ('14', '0', '1078673059', '0', '0', '0', '0', '276', 'DE', 'DEU', '', 'Germany VAT', '1', 'VAT', '3', '0.19', '1');
INSERT INTO static_taxes VALUES ('15', '0', '1078673324', '0', '0', '0', '0', '233', 'EE', 'EST', '', 'Estonia VAT', '1', 'VAT', '3', '0.18', '1');
INSERT INTO static_taxes VALUES ('16', '0', '1078673460', '0', '0', '0', '0', '300', 'GR', 'GRC', '', 'Greece VAT', '1', 'VAT', '3', '0.18', '1');
INSERT INTO static_taxes VALUES ('17', '0', '1078673622', '0', '0', '0', '0', '724', 'ES', 'ESP', '', 'Spain VAT', '1', 'VAT', '3', '0.16', '1');
INSERT INTO static_taxes VALUES ('18', '0', '1078673762', '0', '0', '0', '0', '250', 'FR', 'FRA', '', 'France VAT', '1', 'VAT', '3', '0.196', '1');
INSERT INTO static_taxes VALUES ('19', '0', '1078673891', '0', '0', '0', '0', '372', 'IE', 'IRL', '', 'Ireland VAT', '1', 'VAT', '3', '0.21', '1');
INSERT INTO static_taxes VALUES ('20', '0', '1078674015', '0', '0', '0', '0', '380', 'IT', 'ITA', '', 'Italy VAT', '1', 'VAT', '3', '0.2', '1');
INSERT INTO static_taxes VALUES ('21', '0', '1078674320', '0', '0', '0', '0', '196', 'CY', 'CYP', '', 'Cyprus VAT', '1', 'VAT', '3', '0.15', '1');
INSERT INTO static_taxes VALUES ('22', '0', '1078674486', '0', '0', '0', '0', '428', 'LV', 'LVA', '', 'Latvia VAT', '1', 'VAT', '3', '0.18', '1');
INSERT INTO static_taxes VALUES ('23', '0', '1078674636', '0', '0', '0', '0', '440', 'LT', 'LTU', '', 'Lithuania VAT', '1', 'VAT', '3', '0.18', '1');
INSERT INTO static_taxes VALUES ('24', '0', '1078674772', '0', '0', '0', '0', '442', 'LU', 'LUX', '', 'Luxembourg VAT', '1', 'VAT', '3', '0.15', '1');
INSERT INTO static_taxes VALUES ('25', '0', '1078674916', '0', '0', '0', '0', '348', 'HU', 'HUN', '', 'Hungary VAT', '1', 'VAT', '3', '0.25', '1');
INSERT INTO static_taxes VALUES ('26', '0', '1078675045', '0', '0', '0', '0', '470', 'MT', 'MLT', '', 'Malta VAT', '1', 'VAT', '3', '0.15', '1');
INSERT INTO static_taxes VALUES ('27', '0', '1078675385', '0', '0', '0', '0', '528', 'NL', 'NLD', '', 'Netherlands VAT', '1', 'VAT', '3', '0.19', '1');
INSERT INTO static_taxes VALUES ('28', '0', '1078675533', '0', '0', '0', '0', '40', 'AT', 'AUT', '', 'Austria VAT', '1', 'VAT', '3', '0.2', '1');
INSERT INTO static_taxes VALUES ('29', '0', '1078675707', '0', '0', '0', '0', '620', 'PT', 'PRT', '', 'Portugal VAT', '1', 'VAT', '3', '0.19', '1');
INSERT INTO static_taxes VALUES ('30', '0', '1078675852', '0', '0', '0', '0', '705', 'SI', 'SVN', '', 'Slovenia VAT', '1', 'VAT', '3', '0.2', '1');
INSERT INTO static_taxes VALUES ('31', '0', '1078675980', '0', '0', '0', '0', '703', 'SK', 'SVK', '', 'Slovakia VAT', '1', 'VAT', '3', '0.19', '1');
INSERT INTO static_taxes VALUES ('32', '0', '1078676117', '0', '0', '0', '0', '246', 'FI', 'FIN', '', 'Finland VAT', '1', 'VAT', '3', '0.22', '1');
INSERT INTO static_taxes VALUES ('33', '0', '1078676450', '0', '0', '0', '0', '752', 'SE', 'SWE', '', 'Sweden VAT', '1', 'VAT', '3', '0.25', '1');
INSERT INTO static_taxes VALUES ('34', '0', '1078676577', '0', '0', '0', '0', '826', 'GB', 'GBR', '', 'United Kingdom VAT', '1', 'VAT', '3', '0.175', '1');
INSERT INTO static_taxes VALUES ('35', '0', '1078709361', '0', '0', '0', '0', '484', 'MX', 'MEX', '', 'Mexico VAT', '1', 'IVA', '3', '0.15', '1');

