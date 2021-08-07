<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Subject;
use Livewire\WithFileUploads;

class AdminAddSubjectComponent extends Component
{
    use WithFileUploads;

    public $name_subject;
    public $image;
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name_subject'=>'required',
            'image'=>'required',
        ]);
    }

    public function storeimage(){
        $this->validate([
            'image'=>'required|mimes:jpeg,png',
            'name_subject'=>'required',
            ]);
            $Subject= new Subject;
            $Subject->name_subject=$this->name_subject;

            $imageName=time().'.'.$this->image->extension();

            $this->image->storeAs('imagesub',$imageName);
            $Subject->image=$imageName;
            $Subject->save();
            return redirect()->route('admin.subject_dashboard');

    }

    public function render()
    {
        return view('livewire.admin.admin-add-subject-component')->layout('layouts.base');
    }
}
