<?php

class LinkedList
{
    private $size;
    private $head;
    private $tail;

    public function __construct()
    {
        $this->size = 0;
        $this->head = null;
    }

    public function size()
    {
        return $this->size;
    }

    public function add($value)
    {
        if (0 == $this->size) {
            $node = new Node($value, null, null);

            $this->head = $node;
            $this->tail = $this->head;
        } else {
            $node = new Node($value, $this->tail, null);
            $this->tail->setNext($node);
            $this->tail = $node;
        }

        $this->size++;
    }

    public function get($index)
    {
        $node = $this->head;

        for ($i = 0; $i < $index; $i++) {
            $node = $node->getNext();
        }

        if (null == $node) {
            return null;
        }

        return $node->getValue();
    }

    public function remove($index)
    {
        $node = $this->head;

        for ($i = 0; $i < $index; $i++) {
            $node = $node->getNext();
        }

        $prev = $node->getPrev();
        $next = $node->getNext();

        if (null != $prev) {
            $prev->setNext($next);
        }

        if (null != $next) {
            $next->setPrev($prev);
        }

        $this->size--;

        if (0 == $index) {
            $this->head = $next;
        }

        if ($index == $this->size) {
            $this->tail = $prev;
        }

        return $node->getValue();
    }

    public function clear()
    {
        $this->__construct();
    }
}
