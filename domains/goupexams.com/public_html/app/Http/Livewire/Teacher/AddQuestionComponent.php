<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Question;
use App\Models\Trueanswer;

use Livewire\WithFileUploads;
class AddQuestionComponent extends Component
{
    use WithFileUploads;
    public $exam_id;
    public $teacher_id;
    public $question;
    public $image;
    public $a;
    public $b;
    public $c;
    public $d;
    public $true_ans;

    public function mount($exam_id,$teacher_id){
        $exam_id=$this->exam_id;
        $teacher_id=$this->teacher_id;
    }
    public function updated($fileds){
        $this->validateOnly($fileds, [
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',

            'true_ans'=>'required',
        ]);
    }
    public function storeQuestion(){
        $this->validate([
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'true_ans'=>'required',
        ]);
        $question =new Question;
        $question->exam_id =$this->exam_id;
        $question->question=$this->question;
        $question->a=$this->a;
        $question->b=$this->b;
        $question->c=$this->c;
        $question->d=$this->d;
        if($this->image){
      $imageName=time().'.'.$this->image->extension();

       $this->image->storeAs('imagequestion',$imageName);
         $question->image=$imageName;
        }
        $question->save();
        $question_id = Question::latest()->first()->id;

        $trueans=new Trueanswer;
        $trueans->question_id=$question_id;
         if($this->true_ans=='1'){
            session()->flash('message','choose correcct');
        }else{
            $trueans->ans=$this->true_ans;
            $trueans->save();
            return redirect()->route('teacher.questions',['teacher_id'=>$this->teacher_id,'exam_id'=>$this->exam_id]);
        }

    }
    public function render()
    {
        return view('livewire.teacher.add-question-component')->layout('layouts.base');
    }
}
