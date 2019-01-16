<?php

namespace Sf4\Populator;

class Foo
{
    protected $bar;
    public $public;
    public $publicWithSetter;

    public function setBar($bar)
    {
        $this->bar = $bar;
    }

    public function getBar()
    {
        return $this->bar;
    }

    public function setPublicWithSetter($var)
    {
        $this->publicWithSetter = $var;
    }
}
