<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

use Livewire\WithFileUploads;
class AdminEditUser extends Component
{

    use WithFileUploads;
    public $student_id;
    public $mobile_phone;
    public $case;
    public $image;
    public $newimage;
    public $name;
    public $year_type;
    public $subject_teacher;
    public function mount($student_id){
        $student_id=$this->student_id;
        $user=User::where('id',$this->student_id)->first();
        $this->mobile_phone='0'.($user->phone_number);
        $this->case=$user->utype;
        $this->year_type=$user->year_type;
        $this->name=$user->name;
        $this->image=$user->profile_photo_path;
        $this->subject_teacher=$user->subject_id;


    }
    public function updatestate(){
        $selectuser=User::where('id',$this->student_id)->first();
        $selectuser->name=$this->name;
        $selectuser->phone_number=$this->mobile_phone;
        $selectuser->utype=$this->case;
        $selectuser->year_type=$this->year_type;
        if($this->newimage){
        
            $imageName=time().'.'.$this->newimage->extension();
        $this->newimage->storeAs('imageteacher',$imageName);
        $selectuser->profile_photo_path=$imageName;
        }
        $selectuser->subject_id=$this->subject_teacher;
        $selectuser->save();

        session()->flash('message', 'تم اضافه استاذ ');

        return redirect()->route('admin.dashboard_users_teach');
    }
    public function render()
    {

        return view('livewire.admin.admin-edit-user')->layout('layouts.base');
    }
}
