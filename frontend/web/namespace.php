<?php
require  'a/user.php';
require  'b/user.php';
//使用命名空间类   new 完整类名（命名空间+类名）
//use \a\User;
$user = new \a\b\User();
//$user = new User();
var_dump($user);

//使用命名空间类2  use 指定类的完整类名
//use \member\User;
//$user2 = new User();
$user2 = new \member\User();
var_dump($user2);