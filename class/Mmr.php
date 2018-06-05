<?php
/**
 * Created by PhpStorm.
 * User: fessnecro
 * Date: 05.06.18
 * Time: 13:34
 */


class Mmr
{
    public $start;
    public $end;

    private $ranges;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;

        $this->ranges = [
            1 => range(0, 2499),
            3 => range(2500, 3499),
            5 => range(3500, 4999),
            10 => range(5000, 6999),
        ];
    }

    /**
     * @return integer;
     */
    public function calculate () {
        $result = 0;
        $values = range($this->start, $this->end - 1);

        foreach ($this->ranges as $value => $range) {
            $result += count(array_intersect($range, $values)) * $value;

        }

        return $result;
    }
}