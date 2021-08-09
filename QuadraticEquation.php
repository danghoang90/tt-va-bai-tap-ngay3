<?php
  class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    function __construct($a,$b,$c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

   public function getA() {
        return $this->a;
    }
   public function getB() {
        return $this->b;
    }
   public function getC() {
        return $this->c;
    }
   public function getDiscriminant() {
        $delta = ($this->b*$this->b) - (4*$this->a*$this->c);
        if ($delta<0) {
            echo "Phương trình vô nghiệp";
        } else if ($delta == 0) {
            echo 'Phương trình nghiệp kép x1 = x2 = ' . (-$this->b/2*$this->a);
       } else {
           echo "Phương trình có hai nghiệp phân biệt, x1 ="  . ((-$this->b + sqrt($delta))/2*$this->a) . "<br>
               x2 = " . ((-$this->b - sqrt($delta))/2*$this->a) ;
        }
    }
};

