<?php declare(strict_types=1);
// 「ユーザー名は3文字以上15文字以下の文字列」「全て小文字で保持する」という制限をコードに落とし込む

class UserName {
  private string $value;

  function __construct(string $value)
  {
    if ($value == null) throw new Exception('ユーザー名が入力されていません。');
    if (mb_strlen($value) < 3 || mb_strlen($value) > 15) throw new Exception('ユーザー名は3文字以上15文字以下の文字のみ利用できます。入力文字数：'.mb_strlen($value));

    $this->value = $value;
  }

  // クラスが文字列に変換される際の動作を決められる（マジックメソッド）
  // 参考： https://www.php.net/manual/ja/language.oop5.magic.php#object.tostring
  public function __toString(): string
  {
    return $this->value;
  }
}