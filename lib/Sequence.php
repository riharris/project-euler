<?php
namespace Euler;

class Sequence
{

    protected $end;

    protected $pattern;

    protected $start;

    /**
     *
     * @param int $start            
     * @param int $end            
     */
    public function __construct(int $start, int $end)
    {
        $this->end = $end;
        $this->pattern = function ($value) {
            return true;
        };
        $this->start = $start;
    }

    public function concat()
    {
        $output = '';
        foreach ($this->generate($this->start, $this->end) as $i) {
            if (call_user_func($this->pattern, $i)) {
                $output .= (strlen($output)) ? ',' . $i : $i;
            }
        }
        return $output;
    }

    public function count()
    {
        $output = 0;
        foreach ($this->generate($this->start, $this->end) as $i) {
            if (call_user_func($this->pattern, $i)) {
                $output ++;
            }
        }
        return $output;
    }

    public function first()
    {
        foreach ($this->generate($this->start, $this->end) as $i) {
            if (call_user_func($this->pattern, $i)) {
                return $i;
            }
        }
    }

    public function forValuesMatching(callable $pattern)
    {
        $this->pattern = $pattern;
        return $this;
    }

    public function sum()
    {
        $output = 0;
        foreach ($this->generate($this->start, $this->end) as $i) {
            if (call_user_func($this->pattern, $i)) {
                $output += $i;
            }
        }
        return $output;
    }

    protected function generate($start, $end)
    {
        while ($start <= $end) {
            yield $start ++;
        }
    }
}