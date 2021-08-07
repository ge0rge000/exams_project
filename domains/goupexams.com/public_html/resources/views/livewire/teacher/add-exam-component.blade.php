<div>
    <style>
        a.chosen-single {
        width: 290px;
    }
    select {
        width: 300px;
        border: 1px solid;
        border-radius: 8px;
        height: 31px;
        color: black;
    }
    input#frm-reg-lname {
    border: 1px solid #e6e6e6;
    outline: none;
    width: 100%;
    height: 43px;
    font-size: 13px;
    line-height: 19px;
    padding: 0 5px 0 14px;
    color: #333333;
}
h1.new_Title {
    color: black;
    font-weight: bold;
    text-align: center;
    margin-top: 6px;
    font-size: 29px;
}
        </style>
        <h1 class="new_Title">{{$title}}</h1>
        <main id="main" class="main-site left-sidebar">

            <div class="container">


                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                        <div class=" main-content-area">
                            <div class="wrap-login-item ">
                                <div class="login-form form-item form-stl">


                                     <form name="frm-login"  wire:submit.prevent="creatExam" >
                                        @csrf

                                            <fieldset class="wrap-input" >
                                                <input type="hidden" id="frm-reg-lname" name="subject_id"   value="{{$teacher->subject_id}}" required  wire:model="subject_id">


                                             </fieldset>
                                             <fieldset class="wrap-input" >

                                                <input type="hidden" id="frm-reg-lname" name="teacher_id"   value="{{$teacher->id}}" required  wire:model="teacher_id">

                                                                            </fieldset>
        <fieldset class="wrap-input" >
            <label>عنوان الامتحان</label>
            <input type="text" id="frm-reg-lname" name="title_exam"   :value="title_exam" placeholder="enter title exam" required  wire:model="title_exam">

                                        </fieldset>
                                        @error('title_exam')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                        <fieldset class="wrap-input" >
                            <label>  زمن الامتحان (ملحوظه الزمن بالساعه)</label>
                            <input type="number" id="frm-reg-lname" name="duration"   :value="duration" placeholder="duration" required  wire:model="duration">

                                                        </fieldset>
                                                      @error('duration')
                                                        <p class="text-danger">الامتحان لايجب ان يتخطى 3 ساعات</p>
                                                        @enderror
                         <fieldset class="wrap-input">
                    <label> سعر الامتحان</label>
                    <input type="number" id="frm-reg-lname" name="paid"   :value="paid" placeholder="سعر الامتحان" required  wire:model="paid">

                                </fieldset>
                                                        @error('paid')
                                                            {{$message}}
                                                        @enderror

           
                                                <input type="submit" class="btn btn-sign" value="add" name="register">

                                    </form>
                                    @if(Session::has('message'))
                                    <div class="alert alert-primary" role="alert">
                                        {{Session::get('message')}}
                                      </div>

                                    @endif
                                </div>
                            </div>
                        </div><!--end main products area-->
                    </div>
                </div><!--end row-->

            </div><!--end container-->

        </main>

    </div>
