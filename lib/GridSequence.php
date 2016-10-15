<?php
namespace Euler;

class GridSequence extends Sequence
{

    protected $size;

    protected $values;

    public function __construct(int $size, array $values)
    {
        $this->size = $size;
        for ($i = 1; $i < $size; $i ++) {
            for ($j = 1; $j < $size; $j ++) {
                if (isset($values[$i - 1][$j - 1])) {
                    $this->values[$i][$j] = $values[$i - 1][$j - 1];
                }
            }
        }
        parent::__construct(1, $size * $size);
    }

    protected function generate($start, $end)
    {
        while ($start <= $end) {
            
            $column = $this->getColumn($start);
            $row = $this->getRow($start);
            
            $output = 0;
            
            if ($this->getValue($row, 1 + $column) && $this->getValue($row, 2 + $column) && $this->getValue($row, 3 + $column)) {
                
                $output = max($output, $this->getValue($row, $column) * $this->getValue($row, 1 + $column) * $this->getValue($row, 2 + $column) * $this->getValue($row, 3 + $column));
            }
            
            if ($this->getValue(1 + $row, $column) && $this->getValue(2 + $row, $column) && $this->getValue(3 + $row, $column)) {
                
                $output = max($output, $this->getValue($row, $column) * $this->getValue(1 + $row, $column) * $this->getValue(2 + $row, $column) * $this->getValue(3 + $row, $column));
            }
            
            if ($this->getValue(1 + $row, 1 + $column) && $this->getValue(2 + $row, 2 + $column) && $this->getValue(3 + $row, 3 + $column)) {
                
                $output = max($output, $this->getValue($row, $column) * $this->getValue(1 + $row, 1 + $column) * $this->getValue(2 + $row, 2 + $column) * $this->getValue(3 + $row, 3 + $column));
            }
            
            if ($this->getValue(1 + $row, - 1 + $column) && $this->getValue(2 + $row, - 2 + $column) && $this->getValue(3 + $row, - 3 + $column)) {
                
                $output = max($output, $this->getValue($row, $column) * $this->getValue(1 + $row, - 1 + $column) * $this->getValue(2 + $row, - 2 + $column) * $this->getValue(3 + $row, - 3 + $column));
            }
            
            yield $output;
            
            $start ++;
        }
    }

    public function getColumn($index)
    {
        if ($this->isLastColumnEntry($index)) {
            return $this->size;
        } else {
            return $index % $this->size;
        }
    }

    public function getRow($index)
    {
        if ($this->isLastColumnEntry($index)) {
            return intdiv($index, $this->size);
        } else {
            return 1 + intdiv($index, $this->size);
        }
    }

    protected function getValue($row, $column)
    {
        if (isset($this->values[$row][$column])) {
            return $this->values[$row][$column];
        } else {
            return false;
        }
    }

    protected function isLastColumnEntry($index)
    {
        return ($index % $this->size) ? false : true;
    }
}