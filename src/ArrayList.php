<?php

class ArrayList
{
  private $size;
  private $head;
  private $tail;

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
    if (0 == $this->size) {
      $node = new Node($value, NULL, NULL);

      $this->head = $node;
      $this->tail = $this->head;
    } else {
      $node = new Node($value, $this->tail, NULL);
      $this->tail->setNext($node);
      $this->tail = $node;
    }

    $this->size++;
  }

  public function get($index)
  {
    $node = $this->head;

    for($i = 0; $i < $index; $i++) {
      $node = $node->getNext();
    }

    if (NULL == $node){
      return NULL;
    }

    return $node->getValue();
  }
}
