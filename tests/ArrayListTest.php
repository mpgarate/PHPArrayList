<?php

class StackTest extends PHPUnit_Framework_TestCase
{
  public function testConstructEmptyList()
    {
      $list = new ArrayList;

      $this->assertEquals($list->size(), 0);
    }

  public function testAddAnItem()
  {
    $list = new ArrayList;
    $list->add("Example message");

    $this->assertEquals($list->size(), 1);
    $this->assertEquals($list->get(0), "Example message");
  }
}
