<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Question;
use App\Models\Trueanswer;
use Livewire\WithFileUploads;

class EditQuestionComponent extends Component
{

    use WithFileUploads;

    public $question_id;
    public $exam_id;
    public $teacher_id;
    public $question;
    public $a;
    public $b;
    public $c;
    public $image;
    public $newimage;
    public $d;
    public $true_ans;
    public function mount($question_id){
        $question_id=$this->question_id;
        $exam_id=$this->exam_id;
        $teacher_id=$this->teacher_id;
        $question=Question::where('id',$question_id)->first();
        $this->question=$question->question;
        $this->a=$question->a;
        $this->b=$question->b;
        $this->c=$question->c;
        $this->d=$question->d;
        $this->image=$question->image;
        $true_ans=Trueanswer::where('question_id',$question_id)->first();
        $this->true_ans=$true_ans->ans;
    }

    public function updateQuestion(){

        $question=Question::where('id',$this->question_id)->first();
        $true_ans=Trueanswer::where('question_id',$this->question_id)->first();

        $question->question=$this->question;
        $question->a=$this->a;
        $question->b=$this->b;
        $question->c=$this->c;
        $question->d=$this->d;
        if($this->newimage){
            $imageName = time().'.'.$this->newimage->extension();
            $this->newimage->storeAs('imagequestion', $imageName);
            $question->image=$imageName ;
    }
        $question->save();
        $true_ans->ans=$this->true_ans;
        $true_ans->save();
        session()->flash('message','تم تعديل السوال بنجاح ');
        return redirect()->route('teacher.questions',['exam_id'=>$this->exam_id,'teacher_id'=>$this->teacher_id]);

    }
    public function render()
    {
        return view('livewire.teacher.edit-question-component')->layout('layouts.base');
    }
}
