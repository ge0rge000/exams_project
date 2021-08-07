<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

use App\Models\Resco;
use App\Models\Question;
use App\Models\Trueanswer;


class Choicesexamcomponent extends Component
{

    public $exam_id;
    public $student_id;
    public $choices_answer=[];
    public $questionss=[];
    public function mount($exam_id,$student_id){
        $exam_id=$this->exam_id;
        $student_id=$this->student_id;
    }
    public function render()
    {

        $choices=Resco::where('exam_id',$this->exam_id)->first();
        $choicees=unserialize($choices->choices);

        

        return view('livewire.student.choicesexamcomponent',['choicees'=>$choicees  ])->layout('layouts.base');
    }
}
