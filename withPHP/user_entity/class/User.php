<?php declare(strict_types=1);

// エンティティ
class User {
  private UserId $id;
  private UserName $name;

  function __construct(UserId $id, UserName $name)
  {
    if ($id == null) throw new Exception('UserIdが空です。');
    if ($name == null) throw new Exception('UserNameが空です。');

    $this->id = $id;
    $this->change_name($name);
  }

  // 可変である
  public function change_name(UserName $name)
  {
    $this->name = $name;
  }

  // 識別子による比較
  public function equals(User $other): bool
  {
    // if ($this == $other) return true;

    return (string) $this->id === (string) $other->id;
  }
}