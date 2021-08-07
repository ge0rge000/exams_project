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
    background: #3a93f385;
    border-radius: 31px;
    /* width: 99px; */
    /* height: 53px; */
    font-size: 17px;
    padding: 14px;

    text-decoration: none;
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
h1.title_exam {
    font-weight: bold;
    text-align: center;
}
a.add_sub {
    float: right;
    background-color: black;
    color: white;
    border: 1px solid;
    border-radius: 14px;
    height: 38px;
    margin-bottom: 12px;
    text-align: center;
    width: 128px;
    padding-top: 6px;
}
.oke {
    font-size: 26px;
}


@media screen and (max-width: 930px) {
    table {
      border: 0;
    }

    table caption {
      font-size: 1.3em;
    }

    table thead {
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
    .unique{
    display:block
}
    table tr {
      border-bottom: 3px solid #ddd;
      display: block;
      margin-bottom: .625em;
    }

    table td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
    }

    table td::before {

      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }

    table td:last-child {
      border-bottom: 0;
    }
  }

img.quest.main {
    width: 72px;
    height: 69px;
}
        </style>
         <div class="dahboard"   >

            @if (Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('message')}}
              </div>
            @endif


            <a class="add_sub " href="{{route('teacher.downloadquestions',['exam_id'=>$exam_id,'teacher_id'=>$teacher_id])}}">pdf</a>

            <a class="add_sub" href="{{route('teacher.addquestions',['exam_id'=>$exam_id,'teacher_id'=>$teacher_id])}}">Add question</a>
            <a class="add_sub" href="{{route('teacher.dashboard',['teacher_id'=>Auth::user()->id])}}"> Dashboard</a>

              <h1 class="title_exam">{{$title_exam->title}}</h1>
            <table   id="customers" >
              <thead>
          <tr>
              <th style="width: 10px ; padding:16px">#</th>
            <th scope="col">الاسئله</th>
            <th scope="col">image</th>
            <th  scope="col">  <span>(a)</span> <h4>الاختيار الاول</h4> </th>
            <th scope="col"> <span>(b)</span><h4>الاختيار الثانى</h4> </th>
            <th scope="col"><span>(c)</span><h4>الاختيار الثالث </h4>  </th>
            <th scope="col"><span>(d)</span><h4>الاختيار الرابع  </h4> </th>
            <th scope="col">الاجابه الصحيحه</th>
            <th scope="col" >الحاله</th>
          </tr>
        </thead>

            @foreach ($questions as $index=>$question )
            <tr>
             <td> <span class="unique">رقم السوال </span>{{$index+1}}</td>

            <td> <span class="unique">السوال </span> {{$question->question}}</td>
            <td><img    class="quest main" src="{{asset('assets/imagequestion')}}/{{$question->image}}"  onerror="this.src='{{asset('assets/no-image.png')}}';this.onerror='';"/></td>
            <td> <span class="unique">الاختيار الاول </span> {{$question->a}} </td>
            <td> <span class="unique">الاختيار الثانى </span> {{$question->b}}</td>
            <td> <span class="unique">الاختيار الثالث </span> {{$question->c}}</td>
            <td> <span class="unique">الاختيار الرابع  </span> {{$question->d}}</td>
            <td> <span class="unique">الاجابه الصحيحه  </span> {{$question->trueanswer->ans}}</td>
            <td>

                <a href="#"  onclick="confirm('are you sure to want delete it') || event.stopImmediatePropagation()"  wire:click.prevent="delete_question({{$question->id}})"><span style="color:#ee7045">Delete </span><i class="fas fa-trash" style="color:#ee7045"></i>  </a>
                <br>
              
                <a href="{{route('teacher.editquestions',['exam_id'=>$question->exam_id,'teacher_id'=>$teacher_id,'question_id'=>$question->id])}}"  ><span  style="color:#39a4ac">Edit </span><i class="fas fa-edit" style="color:#39a4ac"></i>  </a>
            </td>
             </tr>
            @endforeach




        </table>
       
        </div>

</div>
