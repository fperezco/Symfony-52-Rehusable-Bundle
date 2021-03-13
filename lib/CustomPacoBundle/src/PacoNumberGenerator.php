<?php

namespace Paco\CustomPacoBundle;

class PacoNumberGenerator
{
    private $baseNumber;
    private $topNumber;

    public function __construct($baseNumber = 0, $topNumber = 100){
        $this->baseNumber = $baseNumber;
        $this->topNumber = $topNumber;
    }

    public function getNumber(){
        return random_int($this->baseNumber, $this->topNumber);
    }
}