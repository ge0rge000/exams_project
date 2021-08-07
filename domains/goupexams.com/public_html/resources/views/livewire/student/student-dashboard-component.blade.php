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

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #000000;
          color: white;

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
            <th>اسم الامتحان</th>
            <th>النتيجه </th>
            <th>اجاباتك</th>

          </tr>
</thead>
              @foreach ($exams as $exam)
              <tr>
                <td><span class="unique">اسم الامتحان</span>{{$exam->exam->title}}</td>
                <td><span class="unique">الدرجه</span>   {{$exam->result}}/{{ $questions->where('exam_id', '=', $exam->exam_id)->count() }}  </td>
                <td><a href="{{route('student.choices_exam',['exam_id'=>$exam->exam_id,'student_id'=>Auth::user()->id])}}">الاجابات</a></td>
            </tr>
              @endforeach



        </table>
        </div>


</div>
