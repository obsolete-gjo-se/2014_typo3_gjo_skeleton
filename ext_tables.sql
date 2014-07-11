CREATE TABLE tx_gjoexdatatypes_domain_model_datatype (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  string_without_break varchar(30) NOT NULL DEFAULT '',
  string_with_break text NOT NULL,
  password varchar(20) NOT NULL DEFAULT '',
  number_integer int(11) NOT NULL DEFAULT '0',
  select_single int(11) NOT NULL DEFAULT '0',
  select_single_db int(11) NOT NULL DEFAULT '0',
  checkbox_single tinyint(1) NOT NULL DEFAULT '0',
  radio_multi tinyint(3) NOT NULL DEFAULT '0',

  PRIMARY KEY (uid),
  KEY parent (pid),
);

CREATE TABLE tx_gjoexdatatypes_domain_model_month (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  month_string varchar(30) NOT NULL DEFAULT '',

  PRIMARY KEY (uid),
  KEY parent (pid),
);