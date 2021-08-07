<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Password;

class AdminTeacherExamsPasswords extends Component
{

    public $subject_id;
    public $teacher_id;
    public $exam_id;
    public $passwords=[];

    public function mount($subject_id,$teacher_id,$exam_id){
        $subject_id=$this->subject_id;
        $teacher_id=$this->teacher_id;
        $exam_id=$this->exam_id;
    }

    public function render()
    {

        $passwords_exam=Password::where('exam_id',$this->exam_id)->select('passwords')->get();

        $array=explode(',',$passwords_exam);




        return view('livewire.admin.admin-teacher-exams-passwords',['array'=>$array])->layout('layouts.base');
    }
}
