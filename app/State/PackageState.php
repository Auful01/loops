<?php

use Spatie\ModelStates\State;

abstract class PackageState extends State
{
    abstract public function color(): string;

    public function status(): string
    {
        return $this->value;
    }
}
