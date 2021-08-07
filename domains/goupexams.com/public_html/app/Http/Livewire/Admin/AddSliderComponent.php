<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Slider;
class AddSliderComponent extends Component
{
    use WithFileUploads;

    public $name_slider;
    public $image;
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name_slider'=>'required',
            'image'=>'required',
        ]);
    }


    public function storeslider(){
        $this->validate([
            'name_slider'=>'required',
            'image'=>'required',
        ]);
            $slider= new Slider;
            $slider->name_slider=$this->name_slider;

            $imageName=time().'.'.$this->image->extension();

            $this->image->storeAs('imageslider',$imageName);
            $slider->image=$imageName;
            $slider->save();
            session()->flash('message','slider is added');
            return redirect()->route('admin.slider_dashboard');

    }

    public function render()
    {
        return view('livewire.admin.add-slider-component')->layout('layouts.base');
    }
}
