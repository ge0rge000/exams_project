<?php

namespace App\Http\Livewire\Teacher;
use App\Models\Question;
use App\Models\Exam;

use Livewire\Component;
use PDF;
class Printpdf extends Component
{


    public $teacher_id;
    public $exam_id;
    public function mount($teacher_id,$exam_id){
        $teacher_id=$this->teacher_id;
        $exam_id=$this->exam_id;
    }
    public function generatePDF()
	{



	}
    public function render()
    {
        $questions=Question::where('exam_id',$this->exam_id)->get();
         $title=Exam::where('id',$this->exam_id)->select('title')->first();

	   // $pdf = PDF::loadView('livewire.teacher.printpdf',compact('questions','title'));
	   // $pdf->autoScriptToLang = true;
	   // $pdf->autoArabic = true;
	   // $pdf->autoLangToFont = true;
	   // return $pdf->download('pdf.pdf');
	    
	            return view('livewire.teacher.printpdf',['questions'=>$questions,'title'=>$title])->layout('layouts.base');

    }
}
