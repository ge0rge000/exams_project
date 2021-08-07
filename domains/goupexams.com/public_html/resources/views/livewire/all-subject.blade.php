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
    </style>
    <div class="subject">
        <div class="row">

        <ul class="product-list grid-products equal-container">
            @foreach ($subjects as $subject )
 <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="product-thumnail">
                        <a href="{{route('subject.teacher',['name_subject'=>$subject->name_subject,'id_subject'=>$subject->id])}}" title="{{$subject->name_subject}}">
                            <figure><img class="subject_image" src="{{asset('assets/imagesub')}}/{{$subject->image}}"
                                alt="no load photo"   ></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="{{route('subject.teacher',['name_subject'=>$subject->name_subject,'id_subject'=>$subject->id])}}" class="product-name"> {{$subject->name_subject}} </a>

                    </div>
                </div>
            </li>
            @endforeach



        </ul>

    </div></div>

</div>
