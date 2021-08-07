<div>
<style>
    .teachers {
        margin: auto;
    width: 80%;
    margin-bottom: 75px;
}
h4.nospace.font-xs {
    color: black;
    font-weight: bold;
}
</style>
    <div  class="teachers">
    <section id="services">
        <div class="sectiontitle">
            <h1 class="heading font-x2 unique">  </h1>
          <h4 class="nospace font-xs"> Teachers Of Go Up </h4>

        </div>
        <ul class="nospace group">
            @foreach ($teachers as $teacher )

          <li class="one_quarter">
            <article>
                <a href="{{route('subject.exams',['name_subject'=>$subject->name_subject,'id_subject'=>$subject->id,'teacher_id'=>$teacher->id])}}"><img class="teacher_photo" src="{{asset('assets/imagesub')}}/{{$subject->image}}"></a>
                <a href="{{route('subject.exams',['name_subject'=>$subject->name_subject,'id_subject'=>$subject->id,'teacher_id'=>$teacher->id])}}"> <h6 class="heading">{{$teacher->name}}</h6></a>

            </article>

          </li>
          @endforeach
        </ul>
      </section>
    </div>
</div>
