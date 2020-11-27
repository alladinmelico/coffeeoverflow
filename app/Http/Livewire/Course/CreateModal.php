<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;

class CreateModal extends Component
{

    public $addUser = false;

    public function render()
    {
        return view('livewire.course.create-modal');
    }

    public function addUser(){
        $addUser = true;
    }
}