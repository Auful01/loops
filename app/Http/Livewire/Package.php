<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Package extends Component
{
    public function render()
    {
        return view('livewire.package')->extends('layouts.app');
    }
}
