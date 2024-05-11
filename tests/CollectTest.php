<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testCount()
    {
        $collect = new Collect\Collect([13,17]);
        $this->assertSame(2, $collect->count());
    }
    public function testKeys()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->keys()->toArray();
        $this->assertEquals(['a', 'b', 'c'], $result);
    }
    public function testValues()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->values()->toArray();
        $this->assertEquals([1, 2, 3], $result);
    }
    // ???
    public function testGet()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->get('b');
        $this->assertEquals(2, $result);
    }
    public function testExcept()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->except('b')->toArray();
        $this->assertEquals(['a' => 1, 'c' => 3], $result);
    }
    

}
