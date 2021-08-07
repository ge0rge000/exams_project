<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\User;
use App\Models\Password;
use Auth;


class AddExamComponent extends Component
{
    public $teacher_id;
    public $subject_id;
    public $year_type;
    public $title_exam;
    public $duration;
      public $paid;
    public $title="";
    public $range=[];
    public function mount($teacher_id,$subject_id,$year_type){
        $teacher_id=$this->teacher_id;
        $subject_id=$this->subject_id;
        $year_type=$this->year_type;
        
    }
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'title_exam'=>'required',
            'duration'=>'required|integer|max:3',
            'year_type'=>'required',
            'paid'=>'required'
        ]);
    }
    public function creatExam(){

        $this->validate([
            'title_exam'=>'required',
            'duration'=>'required|integer|max:3',
            'year_type'=>'required',
              'paid'=>'required'
        ]);
         $exam=new Exam;

        $exam->id_subject=$this->subject_id;
        $exam->id_teacher=$this->teacher_id;
        $exam->title=$this->title_exam;
        $exam->duration=$this->duration;
        $exam->year_type=$this->year_type;
        $exam->paid=$this->paid;
        $exam->save();
        $exam_id=$exam->id;
        $password=new Password;
        $password->exam_id=$exam_id;
        foreach (range(0,270) as $i) {
            $pass = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 4);

            $range[] = $pass;
            $passwords = array_unique($range);
        }
        $passwords_saves = implode(" , ",$passwords);

        $password->passwords=$passwords_saves;
        $password->save();
        return redirect()->route('teacher.exams_year',['teacher_id'=>$this->teacher_id,'year_type'=>$this->year_type]);

    }
    public function render()
    {
        if($this->year_type==='one')
        {
            $this->title="الصف الاول الثانوى";
        }
        else if($this->year_type==='two'){
            $this->title="الصف الثانى الثانوى";
        }
        else if($this->year_type==='three'){
            $this->title="الصف الثالث الثانوى";
        }
        $teacher=User::where('id',$this->teacher_id)->first();







          return view('livewire.teacher.add-exam-component',['teacher'=>$teacher])->layout('layouts.base');
    }
}
