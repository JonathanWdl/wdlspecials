#
# Table structure for table 'tx_wdlspecials_domain_model_wdlspecials'
#
CREATE TABLE tx_wdlspecials_domain_model_wdlspecials (

	name varchar(255) DEFAULT '' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	special_start int(11) DEFAULT '0' NOT NULL,
	special_stop int(11) DEFAULT '0' NOT NULL,
	category int(11) unsigned DEFAULT '0',
	intervals int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_wdlspecials_domain_model_wdlcategories'
#
CREATE TABLE tx_wdlspecials_domain_model_wdlcategories (

	category varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_wdlspecials_domain_model_wdlintervals'
#
CREATE TABLE tx_wdlspecials_domain_model_wdlintervals (

	intervals varchar(255) DEFAULT '' NOT NULL,

);
