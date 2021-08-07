<div>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        table#customers {
    text-align: center;
}
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #000000;
          color: white;

        }
        td {
    font-weight: bold;
    color: black;
    font-size: 20px;
}
        .dahboard {
    width: 75%;
    margin: auto;
    color: black;
    text-align: end;
    margin-top: 76px;

}
        </style>
        <div class="dahboard">
  <table id="customers">
      <thead>
          <tr>
            <th>السنه الدراسيه</th>
            </thead>
          </tr>
          <tr>
            <td><a href="{{route('teacher.exams_year',['teacher_id'=>$teacher->id,'year_type'=>'one'])}}">الصف الاول الثانوى</a></td>
          </tr>
          <tr>
            <td><a  href="{{route('teacher.exams_year',['teacher_id'=>$teacher->id,'year_type'=>'two'])}}" >الصف الثانى الثانوى</a></td>
          </tr>
          <tr>
            <td><a href="{{route('teacher.exams_year',['teacher_id'=>$teacher->id,'year_type'=>'three'])}}" >الصف الثالث الثانوى</a></td>
          </tr>
        </table>
        </div>


</div>
