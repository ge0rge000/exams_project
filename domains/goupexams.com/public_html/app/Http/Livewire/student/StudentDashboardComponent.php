<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Resco;
use Auth;
use App\Models\Question;
class StudentDashboardComponent extends Component
{
    public function render()
    {
        $exams=Resco::where('user_id',Auth::user()->id)->get();
            $questions=Question::all();
        return view('livewire.student.student-dashboard-component',['exams'=>$exams,'questions'=>$questions])->layout('layouts.base');;
    }
}
