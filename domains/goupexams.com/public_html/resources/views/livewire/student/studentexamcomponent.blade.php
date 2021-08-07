<div>
            <style>
                * {
                box-sizing: border-box;
                }

                #regForm {
                background-color: #ffffff;
                margin: 100px auto;
                font-family: Raleway;
                padding: 40px;
                width: 70%;
                min-width: 300px;
                color:black;
                }

                h1 {
                text-align: center;
                }

                input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
                }

                /* Mark input boxes that gets an error on validation: */
                input.invalid {
                background-color: #ffdddd;
                }

                /* Hide all steps by default: */
                .tab {
                display: none;
                }

                button {
                background-color: #000000;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
                }

                button:hover {
                opacity: 0.8;
                }

                #prevBtn {
                background-color: #bbbbbb;
                }

                /* Make circles that indicate the steps of the form: */
                .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
                }

                .step.active {
                opacity: 1;
                }

                /* Mark the steps that are finished and valid: */
                .step.finish {
                background-color: #04AA6D;
                }
                .chooser {
            display: flex;
            direction: ltr;

            margin-top: 16px
        }
        input#html {
            width: 5%;
        }
        label {
            width: 95%;
        }
        .step.finish {
            background-color: #000000;
        }
        .btns {
            display: flex;
            width: 80%;
            margin: auto;
            justify-content: center;
            font-weight: bold;
        }
        button#nextBtn {
            width: 103px;
        }
        button#nextBtn {
            width: 103px;
            margin-left: auto;
        }
        .time {
            color: white;
            font-weight: bolder;
            font-size: 26px;
            text-align: center;
            height: 41px;
            padding-top: 9px;
            background-color: #151515;
           width: auto;
            margin: auto;
            border-radius: 2px 54px;
        }
        input.submit {
    width: 30%;
    margin: auto;
    color: #fffdfb;
    background-color: #191919;
    border-radius: 20px;
    margin-top: 16px;
    display: none
}
 #zoomtext {
      transform: scale(1);
      transition: transform 0.2s ease-in-out;
    }
    .button_unique {
    position: relative;
    z-index: 999999999999;
}
        </style>


    <div class="time"><p id="hms">0{{$exam_select->duration}}:00:00</p></div>
    <br>
    <label dir="rtl" style="color:black; textalign:'center';">هذه الازارار لتكبير الصور وتصغيرها فى حاله وجود صور.</label>
    <div class="button_unique">
    <button id="zoomOut">-</button>
    <button id="zoomIn">+</button>
</div>
<article>
                    <section id="zoomtext">
        <form id="regForm"  wire:submit.prevent="checkanswer">
          <h1>بدا الامتحان </h1>
            @foreach ($questions as $question )
            <div class="tab">
                   @if($question->image)
                   
                        <img  class ="question" src="{{asset('assets/imagequestion')}}/{{$question->image}}">
                                      @endif
                        <h3>{{$question->question}}</h3>
                        <div class="chooser">
                            <input type="radio" id="html" name="E{{ $question->id}}" value="a" wire:model.defer="choices.{{ $question->id }}">
                              <label for="html">{{$question->a}}</label><br>
                        </div>
                        <div class="chooser">
                            <input type="radio" id="html" name="E{{ $question->id}}" value="b"  wire:model.defer="choices.{{ $question->id }}">
                              <label for="html">{{$question->b}}</label><br>
                        </div>
                        <div class="chooser">
                            <input type="radio" id="html" name="E{{ $question->id}}" value="c" wire:model.defer="choices.{{ $question->id }}">
                              <label for="html">{{$question->c}}</label><br>
                        </div>
                        <div class="chooser">
                            <input type="radio" id="html" name="E{{ $question->id}}" value="d" wire:model.defer="choices.{{ $question->id }}">
                              <label for="html">{{$question->d}}</label><br>
                        </div>

                    </div>
                    @endforeach

          <div style="overflow:auto;">

            <div class="btns"  >
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button"  id="nextBtn"  type="button" onclick="nextPrev(1)">Next</button>
            </div>
          </div>


          <div style="text-align:center;margin-top:40px;">

            @foreach ($questions as $question )
            <span class="step"></span>
            @endforeach
          </div>

                <input type="submit" id="submit" class="submit" value="submit ">

        </form>

 </section>
                  </article> 

        <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";

            submit
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "the last";
            document.getElementById("nextBtn").disabled = true;
            document.getElementById("submit").style.display = "block";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
            document.getElementById("nextBtn").disabled = false;
            document.getElementById("submit").style.display = "none";


          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }

        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }

        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }

        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
        </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
     jQuery(document).ready(function($) {

if (window.history && window.history.pushState) {

$(window).on('popstate', function() {
var hashLocation = location.hash;
var hashSplit = hashLocation.split("#!/");
var hashName = hashSplit[1];

if (hashName !== '') {
  var hash = window.location.hash;
  if (hash === '') {
    alert('Back button was pressed.');
      window.location='www.example.com';
      return false;
  }
}
});

window.history.pushState('forward', null, './#forward');
}

});
</script>
<script type="text/javascript">

    function count() {

      if(document.getElementById('hms').innerHTML.trim()!='')
     {
       startTime = document.getElementById('hms').innerHTML;
     }

     var pieces = startTime.split(":");
     var time = new Date();
     time.setHours(pieces[0]);
     time.setMinutes(pieces[1]);
     time.setSeconds(pieces[2]);
     var timediff = new Date(time.valueOf()-1000)
     var newtime = timediff.toTimeString().split(" ")[0];
     document.getElementById('hms').innerHTML=newtime ;
     document.cookie = "remaining="+newtime;
     setTimeout(count,1000);
    }
    count();


</script>

<script>
document.addEventListener('livewire:load', function () {
    setTimeout(() => Livewire.emit('nextSlot'), <?php echo(($exam_select->duration)*60*60*1000)?>);
})
</script>

 <script>
    var zoom = 1;
    var zoomStep = 0.2;

    document.getElementById("zoomIn").addEventListener("click", function() {
      zoom += zoomStep;
      document.getElementById("zoomtext").style.transform = "scale(" + zoom + ")";
    });
    document.getElementById("zoomOut").addEventListener("click", function() {
      if (zoom > zoomStep) {
        zoom -= zoomStep;
        document.getElementById("zoomtext").style.transform = "scale(" + zoom + ")";
      }
    });
  </script>
   <script type="text/javascript">
        function checkEvt(){
            var evTypep=window.performance.getEntriesByType("navigation")[0].type;
               if (evTypep=='reload'){
                 window.location.replace('http://127.0.0.1:8000/');
               }

        }
        checkEvt();
  </script>
  
  <script>
    $(document).ready(function() {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    })
     </script>


</div>
