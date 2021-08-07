<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Resco;
use App\Models\Question;
class StudentsTeacherComponent extends Component
{
    public $subject_id;
    public $teacher_id;
    public $exam_id;


    public function mount($subject_id,$teacher_id,$exam_id){
        $subject_id=$this->subject_id;
        $teacher_id=$this->teacher_id;
        $exam_id=$this->exam_id;
    }
    public function render()
    {

        $students=Resco::where('exam_id',$this->exam_id)->get();
         $questions=Question::all();
        return view('livewire.admin.students-teacher-component',['students'=>$students,'questions'=>$questions])->layout('layouts.base');
    }
}
