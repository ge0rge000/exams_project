<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

use App\Models\Resco;
use App\Models\Question;
class ResultStudentComponent extends Component
{
    public $name_subject;
    public $teacher_id;
    public $student_id;
    public $exam_id;

    public function mount($name_subject,$teacher_id,$student_id,$exam_id){
        $name_subject=$this->name_subject;
        $teacher_id=$this->teacher_id;
        $student_id=$this->student_id;
        $exam_id=$this->exam_id;
    }


    public function render()
    {
        $questions_number=Question::where('exam_id',$this->exam_id)->get()->count();

        $exam_result=Resco::where('exam_id',$this->exam_id)->where('user_id',$this->student_id)->first();

        $total=$questions_number;


        return view('livewire.student.result-student-component',['exam_result'=>$exam_result,'questions_number'=>$questions_number])->layout('layouts.base');
    }
}
