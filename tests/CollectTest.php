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
    public function testOnly()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->only('a', 'c')->toArray();
        $this->assertEquals(['a' => 1, 'c' => 3], $result);
    }
    public function testFirst()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->first();
        $this->assertEquals(1, $result);
    }
    public function testCountM()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->count();
        $this->assertEquals(3, $result);
    }
    public function testToArray()
    {
        $result = (new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]))->toArray();
        $this->assertEquals(['a' => 1, 'b' => 2, 'c' => 3], $result);
    }
    public function testPush()
    {
        $result = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $result->push(4, 'd');
        $this->assertEquals(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4], $result->toArray());
    }
    public function testUnshift()
    {
        $result = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $result->unshift(0);
        $this->assertEquals([0, 'a' => 1, 'b' => 2, 'c' => 3], $result->toArray());
    }
    public function testShift()
    {
        $result = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $result->shift();
        $this->assertEquals(['b' => 2, 'c' => 3], $result->toArray());
    }
    public function testPop()
    {
        $result = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $result->pop();
        $this->assertEquals(['a' => 1, 'b' => 2], $result->toArray());
    }
    public function testSplice()
    {
        $result = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $result->splice(['a' => 1, 'b' => 2, 'c' => 3], 1, 1);
        $this->assertEquals(['b' => 2, 'c' => 3], $result->toArray());
    }

}
