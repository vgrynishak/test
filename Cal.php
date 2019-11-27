<?php
class Cal {
    private $result;

    public function __construct($startValue)
    {
        $this->result = $startValue;
    }

    public function add($var)
    {
        return $this->result += $var;
    }

    public function min($var)
    {
        return $this->result -= $var;
    }

    public function razdelit($digit)
    {
        return $this->result /=  $digit;
    }

    public function mult($var)
    {
        return $this->result *= $var;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function round()
    {
        round($this->result);
    }
}