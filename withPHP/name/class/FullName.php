<?php declare(strict_types=1);

class FullName {
  public Name $FirstName;
  public Name $LastName;

  function __construct(Name $firstName, Name $lastName)
  {
    $this->FirstName = $firstName;
    $this->LastName = $lastName;
  }

  function Equals(FullName $other): bool {
    if ($other == null) return false;
    if ($other === $this) return true;

    return $this->FirstName == $other->FirstName && $this->FirstName == $other->FirstName;
  }
}