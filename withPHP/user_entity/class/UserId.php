<?php declare(strict_types=1);
class UserId {
  private string $value;

  function __construct(string $value)
  {
    if ($value == null) throw new Exception('UserIdが空です。');
    
    $this->value = $value;
  }

  public function __toString(): string
  {
    return $this->value;
  }
}