<?php
return array(
	//'配置项'=>'配置值'
    
    'DB_TYPE' => 'mysql', // 数据库类型
'DB_HOST' => 'localhost', // 服务器地址
'DB_NAME' => 'model_init', // 数据库名
'DB_USER' => 'root', // 用户名
'DB_PWD' => 'asd123321', // 密码
'DB_PORT' => '3306', // 端口
'DB_PREFIX' => 'm_', // 数据库表前缀
    
    
    //data CACHE
    
    'DATA_CACHE_TIME' => 30, // 数据缓存有效期 0表示永久缓存
'DATA_CACHE_COMPDATA_CACHE_CHECKRESS' => false, // 数据缓存是否压缩缓存
'DATA_CACHE_CHECK' => false, // 数据缓存是否校验缓存
'DATA_CACHE_PREFIX' => '', // 缓存前缀
'DATA_CACHE_TYPE' => 'File', // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
'DATA_CACHE_PATH' => TEMP_PATH,// 缓存路径设置 (仅对File方式缓存有效)
'DATA_CACHE_SUBDIR' => false, // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
'DATA_PATH_LEVEL' => 1, // 子目录缓存级别
    
    'TMPL_PARSE_STRING'=>array(           //添加自己的模板变量规则
	"__PUBLIC_HOME__"=>"/Public/Home",
),
//    "__HOME_CSS__"=>"./Public/Home/Css",
);