<?php declare(strict_types=1);

// Classファイルの自動読み込み
spl_autoload_register(function($className) {
  include 'class/' . $className . '.php';
});

// マルチバイト文字を含む文字列のTrim処理
// 参考： https://qiita.com/fallout/items/a13cebb07015d421fde3
function mbTrim(string $pString): ?string
{
    return preg_replace('/\A[\p{Cc}\p{Cf}\p{Z}]++|[\p{Cc}\p{Cf}\p{Z}]++\z/u', '', $pString);
}

// テストコード｜UserName
$input = mbTrim('ユーザー1');
// $input = mbTrim('ユー');
// $input = mbTrim('');

$username = new UserName($input);
var_dump($username->Value());

