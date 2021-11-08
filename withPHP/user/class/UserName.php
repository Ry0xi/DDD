<?php declare(strict_types=1);
// 「ユーザー名は3文字以上15文字以下の文字列」「全て小文字で保持する」という制限をコードに落とし込む

class UserName {
  private string $name;

  function __construct(string $name)
  {
    if ($name == null) throw new Exception('ユーザー名が入力されていません。');
    if (mb_strlen($name) < 3 || mb_strlen($name) > 15) throw new Exception('ユーザー名は3文字以上15文字以下の文字のみ利用できます。入力文字数：'.mb_strlen($name));

    $this->name = $name;
  }

  public function Value(): string {
    return $this->name;
  }
}