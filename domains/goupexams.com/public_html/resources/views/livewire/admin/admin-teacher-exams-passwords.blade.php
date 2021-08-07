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
h1.subject_name {
    font-weight: bold;
    font-size: 25px;
    text-align: center;
}

        </style>
        <div class="dahboard">
            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('message')}}
              </div>

            @endif

  <table id="customers">
            <tr>
                <th>index</th>
              <th>passwords</th>
       
          </tr>
          @foreach ($array as $key =>$value )
          <tr>
            <td>
                {{$key}}
              </td>
            <td>
                {{$value}}
              </td>
            
             </tr>
          @endforeach

        </table>

        </div>


</div>
