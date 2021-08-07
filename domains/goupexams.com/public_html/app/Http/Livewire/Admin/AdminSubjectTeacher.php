<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Subject;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class AdminSubjectTeacher extends Component
{
    use WithPagination;
    public $subject_id;
    public $teacher_id;
    public function mount($subject_id){
        $subject_id=$this->subject_id;
    }


    public function render()
    {
        $teachers=User::where('subject_id',$this->subject_id)->paginate();

        $subject=Subject::where('id',$this->subject_id)->first();
      

        return view('livewire.admin.admin-subject-teacher',['teachers'=>$teachers,'subject'=>$subject])->layout('layouts.base');
    }
}
