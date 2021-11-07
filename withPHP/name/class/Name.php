<?php declare(strict_types=1);

class Name {
  private string $name;

  function __construct(string $name)
  {
    if ($name == null) throw new Exception('名前が入力されていません。');
    if (!preg_match('/^[a-zA-Z]+$/', $name)) throw new Exception('名前に利用できる文字は半角英字のみです。');

    $this->name = mb_strtolower($name);
  }

  public function getName(): string {
    return $this->name;
  }
}