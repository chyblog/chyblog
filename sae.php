<?php
/**********************************************************
 **   由TAHO创建，访问http://www.tahoroom.com
 **   created by TAHO.  Visit  http://www.tahoroom.com
 **   Version 1.0
 **   tahoroom@163.com                           2013.01.29
 ***********************************************************/

/**设置SAE应用里的Storage的Domain名（域名）**/
/**Set the domain name of storage belongs to your app.  **/
define('SAE_STORAGE', chyblog);
//请把这里的wordpress修改为你的Storage域名
//Please change "wordpress" to your own domain.

/**这里是设置文件上传的路径和文件路径的URL，不要更改**/
/**Here are the dir path & url path of the uploaded files,leave this, DO NOT Change.**/
define('SAE_DIR', 'saestor://' . SAE_STORAGE . '/uploads');
define('SAE_URL', 'http://' . $_SERVER['HTTP_APPNAME'] . '-' . SAE_STORAGE . '.stor.sinaapp.com/uploads');
