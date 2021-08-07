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
          <tr>
            <th>Dashboard</th>
          </tr>
          <tr>
            <td><a href="{{route('admin.subject_dashboard')}}">Subject</a></td>

          </tr>
          <tr>
            <td><a href="{{route('admin.slider_dashboard')}}">sliders</a></td>

          </tr>
          <tr>
            <td><a href="{{route('admin.dashboard_users')}}">users</a></td>

          </tr>
        </table>
        </div>


</div>
