<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Slider;
use App\Models\User;
class HomeComponent extends Component
{
    public function render()
    {

        $sliders=Slider::where('show_slider',1)->get();

        $teachers=User::where('utype','TEC')->get()->count();
        $students=User::where('utype','USR')->get()->count();


        return view('livewire.home-component',['sliders'=>$sliders,'teachers'=>$teachers,'students'=>$students])->layout('layouts.base');
    }
}
