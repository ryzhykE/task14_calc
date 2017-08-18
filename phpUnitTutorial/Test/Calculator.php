<?php
class Calculator
{
    private $a;
    private $b;
    private $m;

    public function setA ($number)
    {
        $this->a = $number;
    }
    public function getA ()
    {
        return $this->a;
    }
    public function setB ($number)
    {
      $this->b= $number;
    }
    public function getB ()
    {
        return $this->b;
    }
    public function setM($m)
    {
        $this->m = $m;
    }
    public function getM()
    {
        return $this->m;
    }
    public function sum ()
    {
        return $this->b + $this->a;
    }
    public function minus()
    {
        return $this->a - $this->b;
    }
    public function multi()
    {
        return $this->a * $this->b;
    }
    public function devide()
    {
        if( $this->b == 0 )
        {
            throw new Exception('No correct operatorL');
        } else {
            return $this->a / $this->b;
        }
    }
    public function sqr()
    {
        return sqrt($this->a);
    }
    public function persent()
    {
        return $this->a * $this->b /100;
    }
    public function clearM()
    {
        $this->m = 0;
    }
    public function readM()
    {
        return $this->m;
    }
    public function plusM($v)
    {
        return $this->m = $this->m + $v;
    }
    public function minusM($v)
    {
        return $this->m = $this->m - $v;
    }
}