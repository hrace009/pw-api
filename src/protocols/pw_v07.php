<?php
/**
 * @author Harris Marfel <hrace009@gmail.com>
 * @link https://www.hrace009.com
 * @copyright Copyright (c) 2020.
 */

$PROTOCOL = array(
	'code' => array(
		'getUserRoles' => 3032,
		'getUser' => 3002,
		'getFactionInfo' => 4608,
		'getRoleStatus' => 3015,
		'getRoleBase' => 3013,
		'getRoleInventory' => 3051,
		'getRoleEquipment' => 3017,
		'getRoleStoreHouse' => 3027,
		'getRoleTask' => 3019,
		'putRoleStatus' => 3014,
		'putRoleBase' => 3012,
		'putRoleInventory' => 3050,
		'putRoleEquipment' => 3016,
		'putRoleStoreHouse' => 3026,
		'putRoleTask' => 3018,
		'sendMail' => 4214,
		'worldChat' => 120,
		'forbidAcc' => 5035,
		'forbidRole' => 360,
		'muteAcc' => 362,
		'muteRole' => 356,
		'getRoleid' => 3033,
		'renameRole' => 3044,
		'getTerritory' => 863,
		'getRoleFriend' => 201,
		'AddFaction' => 4600,
		'DelFaction' => 4601,
		'getFactionInfo' => 4606,
		'getUserFaction' => 4607,
		'getFactionDetail' => 4608,
		'FactionUpgrade' => 4610,
	),
	'role' => array(
		'base' => array(
			'bversion' => 'byte',
			'id' => 'int' ,
			'name' => 'name',
			'race' => 'int',
			'cls' => 'int',
			'gender' => 'byte',
			'custom_data' => 'octets',
			'config_data' => 'octets',
			'custom_stamp' => 'int',
			'status' => 'byte',
			'delete_time' => 'int',
			'create_time' => 'int',
			'lastlogin_time' => 'int',
			'forbidcount' => 'cuint',
			'forbid' => array(
				'type' => 'byte',
				'time' => 'int',
				'createtime' => 'int',
				'reason' => 'name',
			),
			'help_states' => 'octets',
			'spouse' => 'int',
			'reserved1' => 'int',
			'reserved2' => 'int',
		),
		'status' => array(
			'sversion' => 'byte',
			'level' => 'int',
			'level2' => 'int',
			'exp' => 'int',
			'sp' => 'int',
			'pp' => 'int',
			'hp' => 'int',
			'mp' => 'int',
			'posx' => 'float',
			'posy' => 'float',
			'posz' => 'float',
			'worldtag' => 'int',
			'invader_state' => 'int',
			'invader_time' => 'int',
			'pariah_time' => 'int',
			'reputation' => 'int',
			'custom_status' => 'octets',
			'filter_data' => 'octets',
			'charactermode' => 'octets',
			'instancekeylist' => 'octets',
			'dbltime_expire' => 'int',
			'dbltime_mode' => 'int',
			'dbltime_begin' => 'int',
			'dbltime_used' => 'int',
			'dbltime_max' => 'int',
			'time_used' => 'int',
			'dbltime_data' => 'octets',
			'storesize' => 'short',
			'petcorral' => 'octets',
			'property' => 'octets',
			'var_data' => 'octets',
			'skills' => 'octets',
			'storehousepasswd' => 'octets',
			'waypointlist' => 'octets',
			'coolingtime' => 'octets',		
			'reserved1' => 'int',
			'reserved2' => 'int',		
			'reserved3' => 'int',
			'reserved4' => 'int',
		),
		'pocket' => array(
			'icapacity' => 'int',
			'timestamp' => 'int',
			'money' => 'int',
			'invcount' => 'cuint',
			'inv' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
			'reserved6' => 'int',
			'reserved7' => 'int',
		),
		'equipment' => array(
			'eqpcount' => 'cuint',
			'eqp' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
		),
		'storehouse' => array(
			'capacity' => 'int',
			'money' => 'int',
			'storecount' => 'cuint',
			'store' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
			'reserved1' => 'int',
			'reserved2' => 'int',
		),
		'task' => array(
			'task_data' => 'octets',
			'task_complete' => 'octets',
			'task_finishtime' => 'octets',
			'task_inventorycount' => 'cuint',
			'task_inventory' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
		),
	),
	'user' => array(
		'roles' => array(
			'count' => 'cuint',
			'roles' => array(
				'id' => 'int',
				'name' => 'name',
			),
		),
		'info' => array(
			'logicuid' => 'int',
			'rolelist' => 'int',
			'cash' => 'int',
			'money' => 'int',
			'cash_add' => 'int',
			'cash_buy' => 'int',
			'cash_sell' => 'int',
			'cash_used' => 'int',
			'add_serial' => 'int',
			'use_serial' => 'int',
			'exp_logcount' => 'cuint',
			'exg_log' => array(
				'tid' => 'int',
				'time' => 'int',
				'result' => 'short',
				'volume' => 'short',
				'cost' => 'int',
			),
			'addiction' => 'octets',
			'cash_password' => 'octets',		
			'reserved1' => 'short',
			'reserved2' => 'int',
			'reserved3' => 'int',
			'reserved4' => 'int',
		),
	),
	'RoleList' => array(
		'localsid' => 'int',
		'handler' => 'int',
		'userscount' => 'cuint',
		'users' => array(
			'userid' => 'int',
			'roleid' => 'int',
			'linkid' => 'int',
			'localsid' => 'int',
			'gsid' => 'int',
			'status' => 'byte',
			'name' => 'name',
		),
	),
	'FriendList' => array(
		'groupinfocount' => 'cuint',
		'groupinfo' => array(
			'gid' => 'byte',
			'name' => 'name',
		),
		'friendinfocount' => 'cuint',
		'friendinfo' => array(
			'rid' => 'int',
			'cls' => 'byte',
			'gender' => 'byte',
			'name' => 'name'
		),
	),
	'FactionInfo' => array(
		'fid' => 'int',
		'name' => 'name',
		'level' => 'byte',
		'master' => array(
			'roleid' => 'int',
			'role' => 'byte',
		),
		'membercount' => 'cuint',
		'member' => array(
			'roleid' => 'int',
			'role' => 'byte',
		),
		'announce' => 'name',
		'sysinfo' => 'name',
	),
	'GTerritoryDetail' => array(
		'Territorycount' => 'cuint',
		'Territory' => array(	
			'id' => 'short',
			'level' => 'short',
			'owner' => 'int',
			'occupy_time' => 'int',
			'challenger' => 'int',
			'deposit' => 'int',
			'cutoff_time' => 'int',
			'battle_time' => 'int',
			'bonus_time' => 'int',
			'color' => 'int',
			'status' => 'int',
			'timeout' => 'int',
			'maxbonus' => 'int',
			'reserved1' => 'int',
			'reserved2' => 'int',
		),
	),
	'getUserFaction' => array(
		'rid' => 'int',
		'name' => 'name',
		'fid' => 'int',
		'cls' => 'byte',
		'role' => 'byte',
		'reserved' => 'byte',
		'extend' => 'octets',
		'nickname' => 'name',
	),
);