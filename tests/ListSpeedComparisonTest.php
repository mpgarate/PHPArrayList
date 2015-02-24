<?php

class ListSpeedComparisonTest extends PHPUnit_Framework_TestCase
{
    public function testListGetSpeed()
    {
        $linkedList = new LinkedList;
        $arrayList = new ArrayList;

        for ($i = 0; $i < 10000; $i++) {
            $linkedList->add("Message # $i");
        }

        for ($i = 0; $i < 10000; $i++) {
            $arrayList->add("Message # $i");
        }

        $linkedListTimeStart = microtime(true);

        for ($i = 0; $i < 10000; $i++) {
            $linkedList->get($i);
        }

        $linkedListTimeEnd = microtime(true);
        $linkedListTimeElapsed = $linkedListTimeEnd - $linkedListTimeStart;

        $arrayListTimeStart = microtime(true);
        for ($i = 0; $i < 10000; $i++) {
            $arrayList->get($i);
        }

        $arrayListTimeEnd = microtime(true);
        $arrayListTimeElapsed = $arrayListTimeEnd - $arrayListTimeStart;

        echo "\n";
        echo "ArrayList vs LinkedList for i->10,000 get(i)" . "\n";
        echo "array: $arrayListTimeElapsed" . "\n";
        echo "linked: $linkedListTimeElapsed" . "\n";
    }
}
