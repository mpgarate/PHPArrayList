<?php

class Node
{
  private $value;
  private $next;
  private $prev;

  function __construct($value, $prev, $next)
  {
    $this->value = $value;
    $this->prev = $prev;
    $this->next = $next;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function getNext()
  {
    return $this->next;
  }

  public function setNext($next)
  {
    $this->next = $next;
  }

  public function getPrev()
  {
    return $this->prev;
  }

  public function setPrev($prev)
  {
    $this->prev = prev;
  }
}
