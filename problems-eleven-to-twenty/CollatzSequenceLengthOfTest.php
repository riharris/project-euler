<?php
include_once 'CollatzSequenceLengthOf.php';
include_once 'Number.php';

/**
 * Contains the CollatzSequenceLengthOfTest class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class CollatzSequenceLengthOfTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmLengthMatchesExpectedForKnownSequence()
    {
        $this->assertSame('9', strval(new CollatzSequenceLengthOf(new Number(13))));
    }
}