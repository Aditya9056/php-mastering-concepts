<?php

class child
{
    public function hello()
    {
        echo "\n child class";
    }
}

interface child2
{
    public function insidechild2();
}

class Multiple extends child implements child2
{

    function insidechild2()
    {
        echo "\n inside child2";
    }

    function insidemultiple()
    {
        echo "\n multiple";
    }
}

$new = new Multiple();
$new->hello();
$new->insidechild2();
$new->insidemultiple();
