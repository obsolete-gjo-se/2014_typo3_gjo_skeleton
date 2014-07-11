CREATE TABLE tx_gjoskeleton_domain_model_skeleton (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  string_without_break varchar(255) NOT NULL DEFAULT '',

  PRIMARY KEY (uid),
  KEY parent (pid),
);