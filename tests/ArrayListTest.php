<?php

class StackTest extends PHPUnit_Framework_TestCase
{
  public function testConstructEmptyList()
    {
      $list = new ArrayList;
      $this->assertEquals($list->size(), 0);
    }
  }
?>
