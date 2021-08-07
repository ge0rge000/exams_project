<div>
    <style>
         .pe{
              display:inline-flex;
                align-items:center;
             justify-content:center;
             font-size:50px;
             height:70px;
             width:20px;
             margin:90px

         }
         #pageintro {
    color: #FFFFFF;
    background-color: #171514;
    width: 100%;
    height: auto;
    background-position: bottom;
    /* background-repeat: no-repeat; */
}.slider_teacher {
    position: absolute;
    width: 100%;

    top: 833px;
}
.counterer {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    height: 278px;
}
.counterer {
    position: absolute;
    display: flex;

    width: 100%;
    height: 282px;
}
img.rt.big {
    height: 202px;
    width: 100%;
    margin-top: 82px;
    flex-grow: 2;
    position: absolute;
    z-index: 99;
    right: 18px;
}
img.te {
    position: absolute;
    width: 298px;
    right: 0px;
    top: 35px;
}
span.top {
    margin-top: 21px;
}

    </style>
    <div class="slider">

 <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            @foreach ($sliders as  $slider )
          <div class="swiper-slide"><img  src="{{asset('assets/imageslider')}}/{{$slider->image}}"  /></div>
            @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <div id="pageintro" class="HomeComponent" style="background-image:url('{{asset('assets/5.jpg')}}')">
        {{-- <img class="logomiddle" src="{{asset('assets/10.png')}}"> --}}
         <article class="intro">
            <div class="design">
          <h3 class="heading">امتحانات الكترونية فى كل المواد </h3>

            <h3>الخاصة بالمراحل الثانوية الثلاث للشعبتين العلمى والادبى</h3>
            <ul class="inline nospace pushright">
                <li><a class="btn inverse" href="{{route('about_us')}}">من نحن </a></li>
                <li><a class="btn inverse" href="{{route('all_subject')}}">تصفح</a></li>
                
               <!--<li><a class="btn inverse" href="{{route('teachers')}}">المعلمين</a></li>-->

              </ul>
            </div>

        </article>

  <div class="counterer">
            <img class="rt big" src="{{asset('assets/Home.png')}}">
            <img class="te" src="{{asset('assets/Home_1.png')}}">

                    </div>


    <script>
        const counters = document.querySelectorAll('.counter');

// this could work for multiple counters
counters.forEach(counter => {
	// start with 0 by default
	counter.innerText = '0';

	const updateCounter = () => {
		const target = +counter.getAttribute('data-target');
		const c = +counter.innerText;

		// get the 0.1% to speed up things
		const increment = target / 1000;

		if(c < target) {
			counter.innerText = `${Math.ceil(c + increment)}`;
			setTimeout(updateCounter, 1)
		} else {
			counter.innerText = target;
		}
	};

	updateCounter();
});

// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
    </script>
    </div>
