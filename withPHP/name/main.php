<?php declare(strict_types=1);

// Classファイルの自動読み込み
spl_autoload_register(function($className) {
  include 'class/' . $className . '.php';
});

// テストコード｜FullName, Name
$ryoki_firstname = new Name('ryoki');
$ryoki_lastname = new Name('tanaka');
$ryoki_fullname = new FullName($ryoki_firstname, $ryoki_lastname);

$ryoki2_firstname = new Name('Ryoki');
$ryoki2_lastname = new Name('Tanaka');
$ryoki2_fullname = new FullName($ryoki2_firstname, $ryoki2_lastname);

$taro_firstname = new Name('Taro');
$taro_lastname = new Name('Yamada');
$taro_fullname = new FullName($taro_firstname, $taro_lastname);

var_dump($ryoki_fullname->FirstName);
var_dump($ryoki_fullname->LastName);
var_dump($ryoki_fullname->Equals($taro_fullname));
var_dump($ryoki_fullname->Equals($ryoki_fullname));
var_dump($ryoki_fullname->Equals($ryoki2_fullname));