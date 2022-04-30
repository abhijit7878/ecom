<?php


use PHPUnit\Framework\TestCase;


class FirstTest extends TestCase
{
    public function testMultiplicationOfTwoNumber()
    {
        $a =5;
        $b =4;
        $c =5*4;
        $this->assertEquals($c,20);
    }
}