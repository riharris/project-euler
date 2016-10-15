<?php
namespace Euler;

class FloatingPointSequence extends Sequence
{

    protected $values;

    public function __construct(array $values)
    {
        $this->values = $values;
        parent::__construct(0, - 1 + count($values));
    }

    protected function generate($start, $end)
    {
        while ($start <= $end) {
            yield floatval($this->values[$start]);
            $start ++;
        }
    }
}