<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Exam;
use App\Models\Recos;

class AdminTeacherExams extends Component
{
    public $subject_id;
    public $teacher_id;
    public function mount($subject_id,$teacher_id){
        $subject_id=$this->subject_id;
        $teacher_id=$this->teacher_id;
    }
    public function render()
    {

        $exams=Exam::where('id_teacher',$this->teacher_id)->where('id_subject',$this->subject_id)->get();
    

        return view('livewire.admin.admin-teacher-exams',['exams'=>$exams])->layout('layouts.base');
    }
}
