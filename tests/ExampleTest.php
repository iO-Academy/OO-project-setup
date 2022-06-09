<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {

    public function testDo_thing()
    {
        $example = new Example\Example();
        $result = $example->do_thing(2, 2);
        $this->assertSame(4, $result);
    }

}