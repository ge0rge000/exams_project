<div>
    <style>
        .subject {
    margin: auto;
}
.product-info {
    text-align: center;
}
a.product-name {
    font-weight: bold;
    color: black;
    font-size: 21px;
}
.row {
    width: 77%;
    margin: auto;
}
img.image_tec {
    width: 125px;
    height: 145px;
        border-radius: 12px;
        
}
h1 {
       
    color: black;
    font-weight: bold;
    text-decoration: underline;
}
    </style>
    <div class="subject">
                    <h1 style="text-align: center; color:black">Teachers of Go UP</h1>

        <div class="row">
        <ul class="product-list grid-products equal-container">
            @foreach ($teachers as $teacher )
 <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="product-thumnail">
                             <figure>
                                <img class="image_tec" src="{{asset('assets/imageteacher')}}/{{$teacher->profile_photo_path}}" onerror="this.src='{{asset('assets/imagesub')}}/{{$teacher->subject->image}}';this.onerror='';">

                             </figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a  style="color:black ; font-weight: bold;  " class="hv" >{{$teacher->name}}  </a>
                        <br>
                        <a style="color:black; font-weight: bold;"   class="hv" >  0{{$teacher->phone_number}}   </a>
                        <br>
          <a style="color:#eb9035; font-weight: bold;" class="hv lang" > {{$teacher->subject->name_subject}} </a>
                        </div>
                </div>
            </li>
            @endforeach



        </ul>

    </div></div>

</div>
