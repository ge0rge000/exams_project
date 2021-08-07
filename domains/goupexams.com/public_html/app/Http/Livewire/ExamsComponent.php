<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exam;

use Auth;


class ExamsComponent extends Component
{

    public $name_subject;
    public $teacher_id;
    public $id_subject;
    public function mount($name_subject,$teacher_id){
        $name_subject=$this->name_subject;
        $teacher_id=$this->teacher_id;
        $id_subject=$this->id_subject;
    }
    public function render()
    {
        
        $exams=Exam::where('id_teacher',$this->teacher_id)->where('year_type',Auth::user()->year_type)->where('show_exam',1)->get();
        $student_id=Auth::user()->id;
        return view('livewire.exams-component',['exams'=>$exams,'student_id'=>$student_id])->layout('layouts.base');
    }
}
