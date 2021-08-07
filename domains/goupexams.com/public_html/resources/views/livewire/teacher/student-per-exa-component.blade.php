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
.oke {
    font-size: 26px;
}
        </style>

        <div class="dahboard">

        <table id="customers">
                <tr>
                    <thead>


                <th>اسم الطالب </th>
                    <th>الدرجه</th>
                </tr>
            </thead>
                @foreach ($students as $student )

                <tr>
                    <td><span class="unique">اسم الطالب</span>{{$student->users->name}}</td>
                    <td> <span class="unique">الدرجه </span> {{$student->result}}</td>
                </tr>
                @endforeach
                </table>
                </div>
            </div>

</div>
