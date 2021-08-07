<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\User;
use App\Models\Exam;
use Livewire\WithPagination;
class TeacherDashboardComponent extends Component
{
    use WithPagination;
    public $teacher_id;
    public function mount($teacher_id){
        $teacher_id=$this->teacher_id;
    }
    public function render()
    {
        $teacher=User::where('id',$this->teacher_id)->first();

        return view('livewire.teacher.teacher-dashboard-component',['teacher'=>$teacher ])->layout('layouts.base');;
    }
}
