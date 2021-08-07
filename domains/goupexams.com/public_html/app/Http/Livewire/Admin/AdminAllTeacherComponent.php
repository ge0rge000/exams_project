<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class AdminAllTeacherComponent extends Component
{
    use WithPagination;

    public function deleteteacher($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('message','تم مسح الطالب');
    }
    public function render()
    {
        $teacheres=User::where('utype','TEC')->paginate(15);
        return view('livewire.admin.admin-all-teacher-component',['teacheres'=>$teacheres])->layout('layouts.base');
    }
}
