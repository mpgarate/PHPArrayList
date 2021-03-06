<?php

class ArrayList
{
    const DEFAULT_CAPACITY = 10;
    const MAX_ARRAY_SIZE = PHP_INT_MAX;

    private $size;
    private $elements;

    public function __construct()
    {
        $this->size = 0;
        $this->elements = new SplFixedArray(self::DEFAULT_CAPACITY);
    }

    public function size()
    {
        return $this->size;
    }

    public function add($element)
    {
        $size = $this->size;

        $this->ensureCapacityInternal($size + 1);
        $this->elements[$size] = $element;
        $this->size++;
    }

    public function get($index)
    {
        return $this->elements[$index];
    }

    public function remove($index)
    {
        $oldElement = $this->elements[$index];

        $numMoved = $this->size - $index - 1;

        if ($numMoved > 0) {
            for ($i = $index; $i < $this->size - 1; $i++) {
                $this->elements[$i] = $this->elements[$i + 1];
            }
        }

        $this->size--;
        $this->elements[$this->size] = null;
        return $oldElement;
    }

    public function clear()
    {
        $this->__construct();
    }

    private function ensureCapacityInternal($minCapacity)
    {
        if (0 == $this->elements->getSize()) {
            $minCapacity = max(self::DEFAULT_CAPACITY, $minCapacity);
        }

        $this->ensureExplicitCapacity($minCapacity);
    }

    private function ensureExplicitCapacity($minCapacity)
    {
        if ($minCapacity - $this->elements->getSize() > 0) {
            $this->grow($minCapacity);
        }
    }

    private function grow($minCapacity)
    {
        $oldCapacity = $this->elements->getSize();
        $newCapacity = $oldCapacity + ($oldCapacity >> 1);

        if ($newCapacity - $minCapacity < 0) {
            $newCapacity = $minCapacity;
        }

        $this->elements = $this->copyOfArray($this->elements, $newCapacity);
    }

    private function copyOfArray($oldArray, $newCapacity)
    {
        $newArray = new SplFixedArray($newCapacity);

        for ($i = 0; $i < $oldArray->getSize(); $i++) {
            $newArray[$i] = $oldArray[$i];
        }

        return $newArray;
    }
}
