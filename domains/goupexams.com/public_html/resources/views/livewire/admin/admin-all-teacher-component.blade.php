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
        select.options {
    width: 57%;
    /* margin: auto; */
    border: 1px solid;
    height: 34px;
    border-radius: 9px;
    margin-left: 18px;
    flex-grow: 2;
}
        .dahboard {
    width: 75%;
    margin: auto;
    color: black;
    text-align: end;
    margin-top: 76px;
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
.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff;
    width: 606px;
    text-align: center;
    margin: auto;
}
a.color {
    color: black;
    font-weight: bold;
    font-size: 23px;
}
img {
    width: 78px;
    height: 75px;
    display: flex;
    align-content: center;
    float: left;
}
.actions {
    display: flex;
    direction: ltr;
    flex-direction: column;
    text-align: center;
    line-height: 1.5;
}
a.color:hover {
    color: #0056b3 ;
    font-weight: bold;
    font-size: 23px;
}
        </style>
        <div class="dahboard">
             @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('message')}}
              </div>

            @endif
            <a class="add_sub" href="{{route('admin.dashboard')}}">go to Dashboard</a>

  <table id="customers">
          <tr>
            <th>اسم الطالب</th>
            <th>رقم موبايل</th>
            <th>العنوان</th>
            <th>الماده</th>
            <th>تعديل</th>
          </tr>
          @foreach ($teacheres as $teacher )
          <tr>
            <td >{{$teacher->name}}</td>
            <td>0{{$teacher->phone_number}}</td>
            <td>{{$teacher->address}}</td>
            <td>{{$teacher->subject->name_subject}}</td>
            <td>
                <div class="button_admib">
                    <a href="{{route('admin.dashboard_users_st_edit',['student_id'=>$teacher->id])}}" >تعديل</a>
                <a href="#"  onclick="confirm('are you sure to want delete it') || event.stopImmediatePropagation()"  wire:click.prevent="deleteteacher({{$teacher->id}})">Delete <span></span><i class="fas fa-trash-alt"></i></a>
            </div>

            </td>
          </tr>
          @endforeach


        </table>
        {{$teacheres->links()}}
        </div>


</div>
