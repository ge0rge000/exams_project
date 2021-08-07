<div>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
    a.add_exam:hover {
    background: linear-gradient(#ee7045, #e8a12b);
    color: white;
}
        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #000000;
          color: white;

        }
a {
    color: black;
    font-weight: bold;
}
select.options {
    width: 57%;
    /* margin: auto; */
    border: 1px solid;
    height: 34px;
    border-radius: 9px;
    margin-left: 18px;
    flex-grow: 2;
}

a.add_exam {
    background: #000000;
    border-radius: 31px;
    font-size: 12px;
    padding: 14px;
    text-decoration: none;
    margin-bottom: 6px;
    color: white;
}
table#customers {
    margin-top: 29px;
}
.alert.alert-primary {
    width: 22%;
    text-align: center;
    font-weight: bold;
    margin: auto;
}
h1.new_Title {
    color: black;
    font-weight: bold;
    text-align: center;
    margin-top: 6px;
    font-size: 29px;
}
.main{
    display:flex
}
.oke {
    font-size: 26px;
}
.button_techer {
    display: flex;
    flex-direction: column;
    width: 105px;
    float: right;
}
.dahboard {
    width: 98%;
    margin: auto;
    color: black;
    text-align: end;
    margin-top: 76px;
}
        </style>
        <h1 class="new_Title">{{$title}}</h1>
        <div class="dahboard">
            @if (Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('message')}}
              </div>
            @endif
            <div class="button_techer">
 <a class="add_exam btn inverse " href="{{route('teacher.add_exam',['year_type'=>$year,'teacher_id'=>$teacher->id,'subject_id'=>$teacher->subject_id])}}">Add exam</a>
            <a class="add_exam btn inverse" href="{{route('teacher.dashboard',['teacher_id'=>Auth::user()->id])}}"> Dashboard</a>
            </div>
            <table id="customers">
          <tr>
              <thead>


            <th>اسم الامتحان</th>
               <th>سعر الامتحان</th>
            <th>اسئله الامتحان</th>
            <th>الحاله</th>
            <th>الطلاب الذين ادوا الامتحان</th>
         
            <th>Action</th>
  </thead>

          </tr>
          @foreach ($exams as $exam )
          <tr>
            <td><a ><span class="unique">اسم الامتحان :</span> {{ $exam->title}} </a></td>
                <td><a ><span class="unique"> سعر الامتحان:</span> {{$exam->paid!=null?$exam->paid:0}} جنيه </a></td>
            <td> <a href="{{route('teacher.questions',['teacher_id'=>$exam->id_teacher,'exam_id'=>$exam->id])}}">الاسئله</a></td>
            <td>
                    <div class="main">


                    <select class="options"  wire:change="options({{$exam->id}})"  wire:model.defer="select.{{$exam->id}}"  >
                        <option value="3">اختر الحاله</option>
                        <option value="1">اظهر</option>
                        <option value="0">اخفى</option>
                    </select>

                    @if($exam->show_exam=='1')
                    <div class="oke">
                        <i class="fas fa-check-circle"></i>

                    </div>
                    @endif
                </div>
            </td>
            <td><a href="{{route('teacher.student_perform exam',['teacher_id'=>$teacher_id,'exam_id'=>$exam->id,'year_type'=>$year_type])}}"   >الطلاب    <span></span><i class="fas fa-user-graduate"></i></a></td>
            <td><a href="#"  onclick="confirm('are you sure to want delete it') || event.stopImmediatePropagation()"  wire:click.prevent="delete_exam({{$exam->id}})">Delete <span></span><i class="fas fa-trash-alt"></i></a></td>

          </tr>
          @endforeach


        </table>
        <div class="links">
            {{$exams->links()}}
        </div>

        </div>


</div>
