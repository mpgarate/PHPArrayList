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

  public function testAddTenItems()
  {
    $list = new ArrayList;

    for ($i = 0; $i < 10; $i++) {
      $list->add("Example message " . $i);
    }

    $this->assertEquals(10, $list->size());
    $this->assertEquals("Example message 0", $list->get(0));
    $this->assertEquals("Example message 3", $list->get(3));
    $this->assertEquals("Example message 9", $list->get(9));
  }

  public function testAddElevenItems()
  {
    $list = new ArrayList;

    for ($i = 0; $i < 11; $i++) {
      $list->add("Example message " . $i);
    }

    $this->assertEquals(11, $list->size());
    $this->assertEquals("Example message 0", $list->get(0));
    $this->assertEquals("Example message 3", $list->get(3));
    $this->assertEquals("Example message 10", $list->get(10));
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

  public function testRemoveAnItem()
  {
    $list = new ArrayList;
    $list->add("First example message");
    $list->add("Second example message");
    $list->add("Third example message");

    $message = $list->remove(1);

    $this->assertEquals(2, $list->size());
    $this->assertEquals("First example message", $list->get(0));
    $this->assertEquals("Second example message", $message);
    $this->assertEquals("Third example message", $list->get(2));
  }
}
