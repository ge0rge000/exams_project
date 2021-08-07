<?php
namespace App\Http\Livewire\Teacher;
use Livewire\Component;
use App\Models\User;
use App\Models\Exam;
use Livewire\WithPagination;
class TeachersExamsYearSpecified extends Component
{
    use WithPagination;
    public $teacher_id;
    public $year_type;
    public $title="";
    public $select=[];
    public function mount($teacher_id,$year_type){
        $teacher_id=$this->teacher_id;
        $year_type=$this->year_type;

    }
    public function delete_exam($id){
        $exam=Exam::find($id);
        $exam->delete();
        return redirect()->back()->with('message','تم مسح الامتحان');

    }
    public function options($id){
        $exam=Exam::find($id);

        if(($this->select[$id]==0) ||($this->select[$id]==1)){
         $exam->show_exam=$this->select[$id];
         $exam->save();
        }else if($this->select[$id]=='3'){
            session()->flash('messagee','');
        }
        if($exam->show_exam==1){
            return redirect()->back()->with('message','تم اظهار الامتحان');
        }else{
            return redirect()->back()->with('message','تم اخفاء  الامتحان');

        }

    }
    public function render()
    {
        $teacher=User::where('id',$this->teacher_id)->first();
        $exams=Exam::where('id_teacher',$this->teacher_id)->where('year_type',$this->year_type)->paginate(5);
        $year=$this->year_type;
        if($this->year_type==='one')
        {
            $this->title="الصف الاول الثانوى";
        }
        else if($this->year_type==='two'){
            $this->title="الصف الثانى الثانوى";
        }
        else if($this->year_type==='three'){
            $this->title="الصف الثالث الثانوى";
        }

        return view('livewire.teacher.teachers-exams-year-specified',['teacher'=>$teacher,'exams'=>$exams,'year'=>$year])->layout('layouts.base');
    }
}
