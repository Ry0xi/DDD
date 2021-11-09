<?php declare(strict_types=1);
// *******************
// エンティティとしてのUserオブジェクト
// *******************

// Classファイルの自動読み込み
spl_autoload_register(function($className) {
  include 'class/' . $className . '.php';
});

// テストコード｜User change_name(), equals()
$user_id1 = new UserId('1desu');
$user_name1 = new UserName('user1');
$user1 = new User($user_id1, $user_name1);
var_dump($user1);

$new_user_name1 = new UserName('USER1');
$user1->change_name($new_user_name1);
var_dump($user1);

$user_id2 = new UserId('2desu');
$user_name2 = new UserName('user2');
$user2 = new User($user_id2, $user_name2);
$user_id3 = new UserId('1desu');
$user_name3 = new UserName('user3');
$user3 = new User($user_id3, $user_name3);

var_dump($user1->equals($user1));
var_dump($user1->equals($user2));
var_dump($user1->equals($user3));
