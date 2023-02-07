<?php

// Calculator Class

class MyCalculator
{
    public int $nb1;
    public int $nb2;

    public function __construct($nb1, $nb2)
    {
        $this->nb1 = $nb1;
        $this->nb2 = $nb2;
    }

    public function add()
    {
        return $this->nb1 + $this->nb2;
    }

    public function multiply()
    {
        return $this->nb1 * $this->nb2;
    }

    public function subtract ()
    {
        return $this->nb1 - $this->nb2;
    }
    
}

$mycalc = new MyCalculator( 12, 6);
echo $mycalc->add() . "\n";
echo $mycalc->multiply();