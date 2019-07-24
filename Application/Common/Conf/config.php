<?php
return array(
	//'配置项'=>'配置值'
  'DB_TYPE'          =>  'mysql',     // 数据库类型
  'DB_HOST'          =>  '127.0.0.1', // 服务器地址
  'DB_NAME'          =>  'tp_new',      // 数据库名
  'DB_USER'          =>  'root',      // 用户名
  'DB_PWD'           =>  'root',    // 密码
  'DB_POST'          =>  '3306',      // 端口
  'DB_PREFIX'        =>  'tp_',       // 数据库表前缀
  //显示追踪信息
  "SHOW_PAGE_TRACE"=>false,
  // 显示错误信息
  'SHOW_ERROR_MSG' =>true,
  // 加载自定义外部文件
  "LOAD_EXT_FILE"=>"common",
  /***************************************  Auth权限设置  **********************************************/
  'AUTH_CONFIG'=> array(
    'AUTH_ON' => true, //认证开关
    'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
    'AUTH_GROUP' => 'tp_auth_group', //用户组数据表名
    'AUTH_GROUP_ACCESS' => 'tp_auth_group_access', //用户组明细表
    'AUTH_RULE' => 'tp_auth_rule', //权限规则表
    'AUTH_USER' => 'tp_admin'//用户信息表
  ),
);
