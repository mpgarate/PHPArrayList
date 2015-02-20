<?php

class ArrayList
{
  private $size;
  private $head;

  function __construct()
  {
    $this->size = 0;
    $this->head = NULL;
  }

  public function size()
  {
    return $this->size;
  }

  public function add($value)
  {
    if (0 == $this->size)
    {
      $this->head = new Node($value, NULL);
      $this->size++;
    }
  }

  public function get($index)
  {
    $node = $this->head;

    for($i = 0; $i < $index; $i++){
      $node = $node->getNext();
    }

    if (NULL == $node){
      return NULL;
    }

    return $node->getValue();
  }
}
