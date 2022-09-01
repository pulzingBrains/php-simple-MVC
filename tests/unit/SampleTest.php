<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testThatStringsEqual()
    {
        $var = "test";
        $this->assertEquals("test", $var);
    }
}