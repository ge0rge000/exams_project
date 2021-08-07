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
            <a class="add_sub" href="{{route('admin.add_slider')}}">Add slider</a>
            <a class="add_sub" href="{{route('admin.dashboard')}}">go to Dashboard</a>

            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('message')}}
              </div>

            @endif
  <table id="customers">
          <tr>
            <th>صاحب الاعلان </th>
            <th>صوره الاعلان</th>
            <th>الحاله</th>
            <th>delete</th>
          </tr>
          @foreach ($sliders as $slider )


         <tr>
            <td ><a class="color">{{$slider->name_slider}}</a></td>
            <td><img width="20px" src="{{asset('assets/imageslider')}}/{{$slider->image}}"/></td>
            <td>
                <div class="main">


                <select class="options"  wire:change="options({{$slider->id}})"  wire:model.defer="select.{{$slider->id}}"  >
                    <option value="3">اختر الحاله</option>
                    <option value="1">اظهر</option>
                    <option value="0">اخفى</option>
                </select>

                @if($slider->show_slider=='1')
                <div class="oke">
                    <i class="fas fa-check-circle"></i>

                </div>
                @endif
            </div>
        </td>
                <td><a href="#"  onclick="confirm('are you sure to want delete it') || event.stopImmediatePropagation()"  wire:click.prevent="delete_slider({{$slider->id}})">Delete <span></span><i class="fas fa-trash-alt"></i></a></td>
          </tr>
          @endforeach


        </table>
        {{$sliders->links()}}
        </div>


</div>
