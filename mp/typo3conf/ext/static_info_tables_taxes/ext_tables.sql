#
# Table structure for table "static_taxes"
#
CREATE TABLE static_taxes (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  pid int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
  starttime int(11) unsigned DEFAULT '0' NOT NULL,
  endtime int(11) unsigned DEFAULT '0' NOT NULL,
  tx_country_iso_nr int(11) unsigned DEFAULT '0' NOT NULL,
  tx_country_iso_2 char(2) DEFAULT '' NOT NULL,
  tx_country_iso_3 char(3) DEFAULT '' NOT NULL,
  tx_zn_code varchar(45) DEFAULT '' NOT NULL,
  tx_name_en varchar(255) DEFAULT '' NOT NULL,
  tx_scope tinyint(3) unsigned DEFAULT '0' NOT NULL,
  tx_code varchar(5) DEFAULT '' NOT NULL,
  tx_class tinyint(3) unsigned DEFAULT '0' NOT NULL,
  tx_rate varchar(20) DEFAULT '' NOT NULL,
  tx_priority tinyint(3) unsigned DEFAULT '0' NOT NULL,
  PRIMARY KEY (uid),
  KEY parent (pid)
);
