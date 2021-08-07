<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Slider;
use Livewire\WithPagination;
class SliderComponent extends Component
{
    use WithPagination;
    public $select=[];

    public function delete_slider($id){
        $slider=Slider::find($id);
          $img=$slider->image;
        $brandImage = public_path("assets/imageslider/{$img}");

        unlink($brandImage);
        $slider->delete();
        return redirect()->back()->with('message','تم مسح الاعلان');

    }
    public function options($id){
        $slider=Slider::find($id);

        if(($this->select[$id]==0) ||($this->select[$id]==1)){
         $slider->show_slider=$this->select[$id];
         $slider->save();
        }else if($this->select[$id]=='3'){
            session()->flash('messagee','');
        }
        if($slider->show_slider==1){
            return redirect()->back()->with('message','تم اظهار الاعلان');
        }else{
            return redirect()->back()->with('message','تم اخفاء  الاعلان');

        }

    }
    public function render()
    {

        $sliders=Slider::paginate(5);
        return view('livewire.admin.slider-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
