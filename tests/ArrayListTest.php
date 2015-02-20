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

  public function testAddTwoItems()
  {
    $list = new ArrayList;
    $list->add("First example message");
    $list->add("Second example message");

    $this->assertEquals(2, $list->size());
    $this->assertEquals("First example message", $list->get(0));
    $this->assertEquals("Second example message", $list->get(1));
  }

  public function testAddThreeItems()
  {
    $list = new ArrayList;
    $list->add("First example message");
    $list->add("Second example message");
    $list->add("Third example message");

    $this->assertEquals(3, $list->size());
    $this->assertEquals("First example message", $list->get(0));
    $this->assertEquals("Second example message", $list->get(1));
    $this->assertEquals("Third example message", $list->get(2));
  }

  public function testAddFourItems()
  {
    $list = new ArrayList;
    $list->add("First example message");
    $list->add("Second example message");
    $list->add("Third example message");
    $list->add("Fourth example message");

    $this->assertEquals(4, $list->size());
    $this->assertEquals("First example message", $list->get(0));
    $this->assertEquals("Second example message", $list->get(1));
    $this->assertEquals("Third example message", $list->get(2));
    $this->assertEquals("Fourth example message", $list->get(3));
  }

  public function testClearList()
  {
    $list = new ArrayList;
    $list->add("First example message");
    $list->add("Second example message");
    $list->add("Third example message");
    $list->add("Fourth example message");

    $list->clear();

    $this->assertEquals(0, $list->size());
  }
}
