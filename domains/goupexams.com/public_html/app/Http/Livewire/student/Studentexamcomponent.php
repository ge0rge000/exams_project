<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Trueanswer;
use App\Models\Resco;
use Illuminate\Support\Facades\Auth;
use Session;
class Studentexamcomponent extends Component
{

    public $name_subject;
    public $teacher_id;
    public $student_id;
    public $exam_id;
    public $duration_secound;
    public $choices=[];
    protected $listeners = ['nextSlot' => 'checkanswer'];
    public function mount($name_subject,$teacher_id,$student_id,$exam_id){
        $name_subject=$this->name_subject;
        $teacher_id=$this->teacher_id;
        $student_id=$this->student_id;
        $exam_id=$this->exam_id;

    }
    public function checkanswer(){
        $choicees=$this->choices;

        
        


        $result=0;
        foreach($choicees as $key =>$value){

      $choice_true=Trueanswer::where('question_id',$key)->first();
            $true_choice=$choice_true->ans;

            if($true_choice==$value){
                $result++;
            }
        }

        $student_cho_res=new Resco;
          
        $student_cho_res->choices=serialize($choicees);
        $student_cho_res->user_id=$this->student_id;
        $student_cho_res->exam_id=$this->exam_id;
        $student_cho_res->result=$result;
        $student_cho_res->save();
         

        return redirect()->route('student.examonlineresult',['name_subject'=>$this->name_subject,'teacher_id'=>$this->teacher_id,
        'student_id'=>$this->student_id,'exam_id'=>$this->exam_id]);


    }
    public function render()
    {
        $exam_select=Exam::where('id',$this->exam_id)->first();
     
        $questions=Question::where('exam_id',$this->exam_id)->inRandomOrder()->get();

   

      return view('livewire.student.studentexamcomponent',['questions'=>$questions,'exam_select'=>$exam_select, ])->layout('layouts.base');

    }
}
