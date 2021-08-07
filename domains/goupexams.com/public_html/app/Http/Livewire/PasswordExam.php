<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Password;
use App\Models\Resco;
use Auth;
class PasswordExam extends Component
{

        public $name_subject;
        public $teacher_id;
        public $student_id;
        public $exam_id;
        public $password_validate;
        public$arraypasswords=[];

        public function mount(){
            $name_subject=$this->name_subject;
            $teacher_id=$this->teacher_id;
            $student_id=$this->student_id;
            $exam_id=$this->exam_id;

        }
    public function validatepassword(){


        if(Resco::where('user_id',$this->student_id)->where('exam_id',$this->exam_id)->exists()){
            session()->flash('message', 'you enter before');
        }
        else if(Auth::user()->utype=='TEC'){
            session()->flash('message', 'you are teacher not permit not enter');
        }
        else{
            
            $password_exam=Password::where('exam_id', $this->exam_id)->first();

            $arraypasswords=explode(',', $password_exam->passwords);
            $noSpaces = str_replace(' ', '',strtolower($this->password_validate));
            if (in_array(" $noSpaces ", $arraypasswords)) {
                $arr = array_diff($arraypasswords, array(" $noSpaces "));
                $newarr=implode(',', $arr);
                $password_exam->passwords=$newarr ;
                $password_exam->save();
                return redirect()->route('student.examonline', [
                    'name_subject'=>$this->name_subject,
                    'teacher_id'=>$this->teacher_id,
                    'student_id'=>$this->student_id,
                    'exam_id'=>$this->exam_id,
                ]);
            } else {
                session()->flash('message', 'password wrong');
            }
        }
    }
    public function render()
    {
        return view('livewire.password')->layout('layouts.base');
    }
}
