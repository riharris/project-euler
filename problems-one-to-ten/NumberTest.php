<?php

include_once 'Number.php';

/**
 * Contains the NumberTest unit test
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class NumberTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmGetValueReturnsExpectedForIntegerArgument()
    {
        $fixture = new Number(10);
        
        $this->assertSame('10', $fixture->getValue());
    }

    public function testConfirmGetValueReturnsExpectedForStringArgument()
    {
        $fixture = new Number('10');
        
        $this->assertSame('10', $fixture->getValue());
    }

    public function testConfirmHasFactorReturnsExpectedForValidArgument()
    {
        $fixture = new Number('10');
        
        $this->assertSame(true, $fixture->isMultipleOf(5));
    }

    public function testConfirmHasFactorReturnsExpectedForInvalidArgument()
    {
        $fixture = new Number('10');
        
        $this->assertSame(false, $fixture->isMultipleOf(3));
    }
}