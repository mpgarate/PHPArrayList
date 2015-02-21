<?php

class LinkedListTest extends PHPUnit_Framework_TestCase
{
  public function testConstructEmptyList()
    {
      $list = new LinkedList;

      $this->assertEquals($list->size(), 0);
    }

  public function testAddAnItem()
  {
    $list = new LinkedList;
    $list->add("Example message");

    $this->assertEquals(1, $list->size());
    $this->assertEquals("Example message", $list->get(0));
  }

  public function testAddTwoItems()
  {
    $list = new LinkedList;
    $list->add("First example message");
    $list->add("Second example message");

    $this->assertEquals(2, $list->size());
    $this->assertEquals("First example message", $list->get(0));
    $this->assertEquals("Second example message", $list->get(1));
  }

  public function testAddThreeItems()
  {
    $list = new LinkedList;
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
    $list = new LinkedList;
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
    $list = new LinkedList;

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
    $list = new LinkedList;

    for ($i = 0; $i < 11; $i++) {
      $list->add("Example message " . $i);
    }

    $this->assertEquals(11, $list->size());
    $this->assertEquals("Example message 0", $list->get(0));
    $this->assertEquals("Example message 3", $list->get(3));
    $this->assertEquals("Example message 10", $list->get(10));
  }

  public function testAdd10kItems()
  {
    $list = new LinkedList;

    for ($i = 0; $i < 10000; $i++) {
      $list->add("Example message " . $i);
    }

    $this->assertEquals(10000, $list->size());
    $this->assertEquals("Example message 0", $list->get(0));
    $this->assertEquals("Example message 3", $list->get(3));
    $this->assertEquals("Example message 300", $list->get(300));
    $this->assertEquals("Example message 9999", $list->get(9999));
  }

  public function testClearList()
  {
    $list = new LinkedList;
    $list->add("First example message");
    $list->add("Second example message");
    $list->add("Third example message");
    $list->add("Fourth example message");

    $list->clear();

    $this->assertEquals(0, $list->size());
  }

  public function testRemoveAnItem()
  {
    $list = new LinkedList;
    $list->add("First example message");
    $list->add("Second example message");
    $list->add("Third example message");

    $message = $list->remove(1);

    $this->assertEquals(2, $list->size());
    $this->assertEquals("First example message", $list->get(0));
    $this->assertEquals("Second example message", $message);
    $this->assertEquals("Third example message", $list->get(1));
  }

  public function testRemoveManyItems()
  {
    $list = new LinkedList;

    for ($i = 0; $i < 50; $i++) {
      $list->add("Example message " . $i);
    }

    $list->remove(3);
    $list->remove(25);
    $list->remove(47);
    $list->add("Example message 999");

    $this->assertEquals(48, $list->size());
    $this->assertEquals("Example message 4", $list->get(3));
    $this->assertEquals("Example message 27", $list->get(25));
    $this->assertEquals("Example message 48", $list->get(46));
    $this->assertEquals("Example message 999", $list->get(47));
  }
}
