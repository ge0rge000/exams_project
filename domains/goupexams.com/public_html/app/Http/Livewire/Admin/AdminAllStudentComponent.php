<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\User;
use Livewire\WithPagination;
class AdminAllStudentComponent extends Component
{

    use WithPagination;

    public function deletstudent($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('message','تم مسح الطالب');
    }
    public function render()
    {
        $students=User::where('utype','USR')->paginate(10);
        return view('livewire.admin.admin-all-student-component',['students'=>$students])->layout('layouts.base');
    }
}
