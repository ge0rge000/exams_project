<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Resco;
class StudentPerExaComponent extends Component
{

    public $teacher_id;
    public $year_type;
    public $exam_id;
    public function mount($teacher_id,$year_type,$exam_id){
        $teacher_id=$this->teacher_id;
        $year_type=$this->year_type;
        $exam_id=$this->exam_id;
    }
    public function render()
    {
        $students=Resco::where('exam_id',$this->exam_id)->get();

        
        return view('livewire.teacher.student-per-exa-component',['students'=>$students])->layout('layouts.base');
    }
}
