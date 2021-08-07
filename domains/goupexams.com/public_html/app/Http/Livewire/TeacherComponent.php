<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject;
use App\Models\User;

class TeacherComponent extends Component
{
    public $name_subject;
    public $id_subject;
    public $imagee;
    public function mount($name_subject,$id_subject){
        $name_subject=$this->name_subject;
        $id_subject=$this->id_subject;
    }
    public function render()
    {
        $subject=Subject::where('id',$this->id_subject)->first();
        $teachers=User::where('subject_id',$this->id_subject)->get();
        return view('livewire.teacher-component',['teachers'=>$teachers,'subject'=>$subject])->layout('layouts.base');;
    }
}
