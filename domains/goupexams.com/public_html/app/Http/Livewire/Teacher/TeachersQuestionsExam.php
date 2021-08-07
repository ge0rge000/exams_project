<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Question;
use App\Models\Exam;
use PDF;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
class TeachersQuestionsExam extends Component
{
    use withPagination;
    public $teacher_id;
    public $exam_id;
    public function mount($teacher_id,$exam_id){
        $teacher_id=$this->teacher_id;
        $exam_id=$this->exam_id;
    }
    public function delete_question($id){

        $exam=Question::find($id);
        $exam->delete();
        return redirect()->back()->with('message','تم مسح الامتحان');

    }



    public function render()
    {
        $exam_id=$this->exam_id;
        $teacher_id=$this->teacher_id;

        $questions=Question::where('exam_id',$this->exam_id)->get();

            
        $title_exam=Exam::where('id',$this->exam_id)->select('title')->first();



        return view('livewire.teacher.teachers-questions-exam',['exam_id'=>$this->exam_id,
        'teacher_id'=>$this->teacher_id,
        'questions'=>$questions,
        'title_exam'=>$title_exam
        ])
        ->layout('layouts.base');
    }

}
