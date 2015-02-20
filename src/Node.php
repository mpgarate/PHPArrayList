<?php

class Node
{
  private $value;
  private $next;

  function __construct($value, $next)
  {
    $this->value = $value;
    $this->next = $next;
  }

  public function getValue(){
    return $this->value;
  }

  public function getNext(){
    return $this->next;
  }
}
