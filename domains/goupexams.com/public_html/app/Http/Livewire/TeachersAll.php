<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
class TeachersAll extends Component
{
    public function render()
    {

        $teachers=User::where('utype','TEC')->get();
        return view('livewire.teachers-all',['teachers'=>$teachers])->layout('layouts.base');;
    }
}
