<?php

/**
 * User: yevhen
 * Date: 10.08.17
 * Time: 12:53
 */
require_once 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    private $calculator;

    public function setup ()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @dataProvider providerSum
     */
    public function testSum ($a, $b, $c)
    {
        $this->calculator->setB($b);
        $this->calculator->setA($a);
        $this->assertEquals($c, $this->calculator->sum());
    }

    public function providerSum ()
    {
        return [
            [5, 5, 10],
            [5, -5, 0],
            [10, -5, 5],
            [10, 0, 10]
        ];
    }

    /**
     * @dataProvider providerMinus
     */
    public function testMinus ($a, $b, $c)
    {
        $this->calculator->setB($b);
        $this->calculator->setA($a);
        $this->assertEquals($c, $this->calculator->minus());
    }

    public function providerMinus ()
    {
        return [
            [10, 5, 5],
            [10, -15, 25],
            [10, 10, 0],
            [0, 10, -10]
        ];
    }

    /**
     * @dataProvider providerMuiti
     */
    public function testMuiti ($a, $b, $c)
    {
        $this->calculator->setB($b);
        $this->calculator->setA($a);
        $this->assertEquals($c, $this->calculator->multi());
    }

    public function providerMuiti ()
    {
        return [
            [0, 5, 0],
            [10, 2, 20],
            [10, 10, 100],
            [10, 0, 0]
        ];
    }

    /**
     * @dataProvider providerDevide
     */
    public function testDevide ($a, $b, $c)
    {
        $this->calculator->setB($b);
        $this->calculator->setA($a);
        $this->assertEquals($c, $this->calculator->devide());
    }

    public function providerDevide ()
    {
        return [
            [10, 5, 2],
            [10, 10, 1],
            [5, 2, 2.5],
            [-10,2,-5]
        ];
    }

    /**
     * @dataProvider providerSqr
     */
    public function testSqr ($a,$c)
    {
        $this->calculator->setA($a);
        $this->assertEquals($c, $this->calculator->sqr());
    }

    public function providerSqr ()
    {
        return [
            [4, 2],
            [100,10],
            [49,7]
        ];
    }

    /**
     * @dataProvider providerPersent
     */
    public function testPersent ($a,$b,$c)
    {
        $this->calculator->setA($a);
        $this->calculator->setB($b);
        $this->assertEquals($c, $this->calculator->persent());
    }

    public function providerPersent ()
    {
        return [
            [100, 10, 10],
            [100, 20, 20],
        ];
    }

    public function testgetM()
    {
        $this->calculator->setM(5);
        $this->assertEquals(5,$this->calculator->getM());
    }











}
