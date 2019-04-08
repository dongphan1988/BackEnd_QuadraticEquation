<?php

class QuadraticEquation
{
    public $a;
    private $b;
    private $c;

    function __construct($new_a, $new_b, $new_c)
    {
        $this->a = $new_a;
        $this->b = $new_b;
        $this->c = $new_c;
    }

    function seta($_a)
    {
        $this->a = $_a;
    }

    function setb($_b)
    {
        $this->b = $_b;
    }

    function setc($_c)
    {
        $this->c = $_c;
    }

    function geta()
    {
        return $this->a;
    }

    function getb()
    {
        return $this->b;
    }

    function getc()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    function get_root1()
    {
        return (-$this->b+pow($this->getDiscriminant(),0.5))/2*$this->a;
    }
    function get_root2(){
        return (-$this->b-pow($this->getDiscriminant(),0.5))/2*$this->a;
    }
}
?>
