<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject;

class AllSubject extends Component
{
    public function render()
    {

        $subjects=Subject::get();
        return view('livewire.all-subject',['subjects'=>$subjects])->layout('layouts.base');
    }
}
