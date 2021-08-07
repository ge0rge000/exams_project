<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Subject;

use Livewire\WithPagination;
class AdminSubjectComponent extends Component
{
    use WithPagination;




    public function render()
    {

        $subjects=Subject::get();

        return view('livewire.admin.admin-subject-component',['subjects'=>$subjects])->layout('layouts.base');
    }
}
