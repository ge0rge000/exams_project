<div>
    <style>
div#foo {
    width: 100%;
    margin-top: 51px;
}
form {
    width: 80%;
    margin: auto;
}
input.btn.btn-sign {
    margin-top: 26px;
}
input#frm-reg-lname {
    margin: auto;
    margin-top: 20px;
    width: 77%;
    height: 51px;
    border-radius: 35px;
    border: 2px solid black;
}
.center {
    color: black;
}
input.btn.btn-sign {
    margin-bottom: 20px;
}
.alert.alert-danger {
    width: 30%;
    margin: auto;
    text-align: center;
    font-weight: bold;
}
.phone-call {
    width: 50px;
    height: 50px;
    left: 20px;
    bottom: 20px;
    background: #eb8738;
    position: fixed;
    text-align: center;
    color: #ffffff;
    cursor: pointer;
    border-radius: 50%;
    z-index: 99;
  display: inline-block;
  line-height: 51px;
}

.phone-call:before {
    position: absolute;
    content: " ";
    z-index: -1;
    top: -15px;
    left: -15px;
    background-color: #eb8738;
    width: 80px;
    height: 80px;
    border-radius: 100%;
    animation-fill-mode: both;
    -webkit-animation-fill-mode: both;
    opacity: 0.6;
    -webkit-animation: pulse 1s ease-out;
    animation: pulse 1.8s ease-out;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}

@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(0);
        opacity: 0;
    }
    25% {
        -webkit-transform: scale(0.3);
        opacity: 1;
    }
    50% {
        -webkit-transform: scale(0.6);
        opacity: .6;
    }
    75% {
        -webkit-transform: scale(0.9);
        opacity: .3;
    }
    100% {
        -webkit-transform: scale(1);
        opacity: 0;
    }
}

@keyframes pulse {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    25% {
        transform: scale(0.3);
        opacity: 1;
    }
    50% {
        transform: scale(0.6);
        opacity: .6;
    }
    75% {
        transform: scale(0.9);
        opacity: .3;
    }
    100% {
        transform: scale(1);
        opacity: 0;
    }
}
h3.not {
    color: black;
    font-weight: bold;
    text-align: center;
}
.alert-warning {
    color: #856404;
    background: linear-gradient(#ee7045, #e8a12b);
    width: 44%;
    margin: auto;
    border-radius: 10px;
}
    </style>
    <div id="foo">

        @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
          </div>

        @endif
        <form name="frm-login"  wire:submit.prevent="validatepassword" >
            @csrf
                <div class="center">
                         <fieldset class="wrap-input" >
                    <label>enter password</label>
        <input type="text" id="frm-reg-lname" name="password_validate"    required  wire:model="password_validate">
                 </fieldset>
                    <input type="submit" class="btn btn-sign" value="Start" name="register">
                </div>

        </form>
    <h3 class="not alert alert-warning">   اضغط على علامه الاتصال لطلب باسورد الامتحان اسفل يسار الشاشه</h3>

<div class="phone-call">
        
             <a href="tel:01020508149"><i class="fas fa-phone"></i> </a>

        </div>
    </div>
</div>
