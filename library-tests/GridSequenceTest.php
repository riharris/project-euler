<?php
use Euler\GridSequence;

class GridSequenceTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmCountMatchesExpectedWhereDataMatchesSize()
    {
        $fixture = new GridSequence(2, array(
            array(
                1,
                2
            ),
            array(
                3,
                4
            )
        ));
        
        $this->assertSame(4, $fixture->count());
    }

    public function testConfirmCountMatchesExpectedWhereDataExceedsSize()
    {
        $fixture = new GridSequence(2, array(
            array(
                1,
                2,
                3
            ),
            array(
                4,
                5,
                6
            )
        ));
        
        $this->assertSame(4, $fixture->count());
    }

    public function testConfirmCountMatchesExpectedWhereDataLessThanSize()
    {
        $fixture = new GridSequence(2, array(
            array(
                1
            ),
            array(
                2
            )
        ));
        
        $this->assertSame(4, $fixture->count());
    }

    public function dataColumn()
    {
        $output[] = array(
            2,
            1,
            1
        );
        $output[] = array(
            2,
            2,
            2
        );
        $output[] = array(
            2,
            3,
            1
        );
        $output[] = array(
            2,
            4,
            2
        );
        return $output;
    }

    public function dataRow()
    {
        $output[] = array(
            2,
            1,
            1
        );
        $output[] = array(
            2,
            2,
            1
        );
        $output[] = array(
            2,
            3,
            2
        );
        $output[] = array(
            2,
            4,
            2
        );
        return $output;
    }

    /**
     * @dataProvider dataColumn
     */
    public function testConfirmGetColumnMatchesExpected($size, $index, $expected)
    {
        $fixture = new GridSequence($size, array());
        
        $this->assertSame($expected, $fixture->getColumn($index));
    }

    /**
     * @dataProvider dataRow
     */
    public function testConfirmGetRowMatchesExpected($size, $index, $expected)
    {
        $fixture = new GridSequence($size, array());
        
        $this->assertSame($expected, $fixture->getRow($index));
    }
}