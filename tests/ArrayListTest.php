<?php

class StackTest extends PHPUnit_Framework_TestCase
{
  public function testExample()
    {
      $list = new ArrayList;
      $this->assertEquals($list->world(), "Hello world");
    }
  }
?>
