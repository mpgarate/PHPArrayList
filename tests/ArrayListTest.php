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

    $this->assertEquals(1, $list->size());
    $this->assertEquals("Example message", $list->get(0));
  }

  public function testTwoItems()
  {
    $list = new ArrayList;
    $list->add("First example message");
    $list->add("Second example message");

    $this->assertEquals(2, $list->size());
    $this->assertEquals("First example message", $list->get(0));
    $this->assertEquals("Second example message", $list->get(1));
  }
}
