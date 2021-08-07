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
.flex {
    display: flex;
    width: 75%;
    margin: auto;
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

        </style>
        <div class="flex">

        <div class="dahboard">
  <table id="customers">
          <tr>
              <thead>
                              <th> سوال id</th>
                              <th>اجاباتك</th>

              </thead>

          </tr>
          @foreach ($choicees  as $key =>$value )
          <tr>
            <td><span class="unique">id سوال</span>{{$key}}</td>
            <td> <span class="unique">اجابتك </span> {{$value}}</td>
          @endforeach
        </tr>

        </table>
        </div>

                </div>
</div>
