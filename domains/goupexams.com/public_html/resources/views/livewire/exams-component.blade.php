<div>

<style>
div#foo {
    display: none;
    width: 98%;
    border: 2px solid;
    border-radius: 13px;
    height: 144px;
    position: absolute;
    z-index: 99;
    bottom: 145px;
    background: black;
    color: white;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    top: 84px;
}
input#frm-reg-lname {
    width: 60%;
    margin: auto;
    border-radius: 10px;
}
input.btn.btn-sign {
    height: 32px;
    padding: 0px;
    width: 55px;
    font-size: 12px;
    margin-top: 7px;
    float: right;
    margin-right: 12px;
}
button#exit {
    width: 55px;
    height: 32px;
    padding: 0px;
    background: #3a93f3;
    float: left;
    color: white;
    border-radius: 20px;
    margin-top: 7px;
    margin-left: 12px;

}
form {
    width: 80%;
    margin: auto;
}
a {
    font-weight: bold;
    color: #eb8938;
    font-size: 17px;
}
</style>

    <div class="exams">

         
        <table id="customers">
            <thead>
            <tr>
              <th>دخول</th>
              <th>اسم الامتحان</th>
             <th>سعر الامتحان</th>

            </tr>
            </thead>
            @foreach ($exams as $exam )

            <tr>
              <td><span class="unique">اسم الامتحان</span>{{$exam->title}}</td>

            <td>
                <a href="{{route('student.exam',['name_subject'=>$name_subject,'teacher_id'=>$teacher_id,'student_id'=>$student_id,'exam_id'=>$exam->id])}}"  >  start</a>
            </td>
         <td >   <div class="unique">سعر الامتحان</div>{{$exam->paid!=null ? $exam->paid: 0 }} جنيه</td>

        </tr>
            @endforeach


          </table>


    </div>

    </div>

