# #
# # Table structure for table 'tx_pgaefancycard_item'
# #
create table tx_pgaefancycard_item (
	uid              int(11) unsigned              not null auto_increment,
	pid              int(11)           default '0' not null,

	header           varchar(255)      default ''  not null,
	subheader        varchar(255)      default ''  not null,
	tt_content       int(11) unsigned  default '0',
	item_type        varchar(255)      default ''  not null,

	tstamp           int(11) unsigned  default '0' not null,
	crdate           int(11) unsigned  default '0' not null,
	cruser_id        int(11) unsigned  default '0' not null,
	deleted          smallint unsigned default '0' not null,
	hidden           smallint unsigned default '0' not null,
	starttime        int(11) unsigned  default '0' not null,
	endtime          int(11) unsigned  default '0' not null,
	sorting          int(11)           default '0' not null,

	sys_language_uid int(11)           default '0' not null,
	l10n_parent      int(11) unsigned  default '0' not null,
	l10n_diffsource  mediumblob                    null,

	t3ver_oid        int(11) unsigned  default '0' not null,
	t3ver_id         int(11) unsigned  default '0' not null,
	t3ver_wsid       int(11) unsigned  default '0' not null,
	t3ver_label      varchar(255)      default ''  not null,
	t3ver_state      smallint          default '0' not null,
	t3ver_stage      int(11)           default '0' not null,
	t3ver_count      int(11) unsigned  default '0' not null,
	t3ver_tstamp     int(11) unsigned  default '0' not null,
	t3ver_move_id    int(11) unsigned  default '0' not null,
	t3_origuid       int(11) unsigned  default '0' not null,

	primary key (uid),
	key parent(pid),
	key t3ver_oid(t3ver_oid, t3ver_wsid),
	key language(l10n_parent, sys_language_uid)
);

#
# Table structure for table 'tt_content'
#
create table tt_content (
	tx_pgaefancycard_item int(11) default '0' not null
);
