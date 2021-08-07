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




#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: black;
}
table {
    border: 0;
    color: black;
    font-weight: bold;
    font-size: 25px;
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


      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }

    table td:last-child {
      border-bottom: 0;
    }
  }
  .login_icon {
    margin-right: 30px;
}

element.style {
}
img.quest {
    width: 100%;
    height: 550px;
}
        </style>


        <h1 style="color:black">امتحان/{{$title->title}}</h1>
 <table  lang="ar" dir="rtl">
    <thead>
    <tr>
        <th scope="col">id سوال</th>

        <th scope="col">الاسئله</th>

        <th  scope="col">  <span  >(a)</span> <h4>الاختيار الاول</h4> </th>
        <th scope="col"> <span  >(b)</span><h4>الاختيار الثانى</h4> </th>
        <th scope="col"><span  >(c)</span><h4>الاختيار الثالث </h4>  </th>
        <th scope="col"><span  >(d)</span><h4>الاختيار الرابع  </h4> </th>
        <th scope="col">الاجابه الصحيحه</th>

      </tr>
    </thead>

      @foreach ($questions as $question )
      <tr>
          <td  <span class="unique">id سوال</span>: {{$question->id}}</td>
      <td> <span class="unique">السوال</span>  {{$question->question}}</td>
    
      <td><img class="quest" src="{{asset('assets/imagequestion')}}/{{$question->image}}"  onerror="this.src='{{asset('assets/no-image.png')}}';this.onerror='';"/></td>
      
      <td>  <span class="unique">الاختيار الاول</span> {{$question->a}} </td>
      <td>  <span class="unique"> الاختيار الثانى </span> {{$question->b}}</td>
      <td> <span class="unique">الاختيار الثالث</span>  {{$question->c}}</td>
      <td><span class="unique">الاختيار الرابع</span> {{$question->d}}</td>
      <td>  <span class="unique">الاجابه الصحيحه</span> {{$question->trueanswer->ans}}</td>

       </tr>
      @endforeach
  </table>



    </div>

