<?php

namespace Paco\CustomPacoBundle;

class PacoNumberGenerator
{
    public function getNumber(){
        return random_int(0, 100);
    }
}