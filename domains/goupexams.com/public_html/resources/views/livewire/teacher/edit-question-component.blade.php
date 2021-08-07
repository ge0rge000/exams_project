<div>
    <style>

     input.btn.btn-submit {
         background: black;
     }
     </style>


             <main id="main" class="main-site left-sidebar">

                 <div class="container">


                     <div class="row">
                         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                             <div class=" main-content-area">
                                 <div class="wrap-login-item ">
                                     <div class="login-form form-item form-stl">
                                             @if (Session::has('message'))
                                        <div class="alert alert-primary" role="alert">
                                            {{Session::get('message')}}
                                          </div>
                                        @endif
                                         <form name="frm-login" wire:submit.prevent="updateQuestion" >
                                             @csrf
                                             <fieldset class="wrap-title">
                                                 <h3 class="form-title">السوال</h3>
                                                 <input type="text" id="frm-login-uname" name="text" placeholder="اضف السوال"  wire:model="question" required  >
                              <fieldset class="wrap-title">
                                                <h3 class="form-title">صوره</h3>
                                                <input   dir='auto' type="file" id="frm-login-uname" name="text" placeholder="اضف السوال"  wire:model="newimage"    >

                                            </fieldset>
                                            @if($newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" width="120px" />
                                            @else
                                            <img class="quest" src="{{asset('assets/imagequestion')}}/{{$image}}" onerror="this.src='{{asset('assets/no-image.png')}}';this.onerror='';" width="30px" />
                                            @endif
                                             </fieldset>
                                             <fieldset class="wrap-input">
                                                 <label for="frm-login-uname">a:</label>
                                                 <input type="text" id="frm-login-uname" name="text" placeholder="الاختيار الاول"  wire:model="a"  required  >
                                             </fieldset>
                                             <fieldset class="wrap-input">
                                                 <label for="frm-login-uname">b:</label>
                                                 <input type="text" id="frm-login-uname" name="text" placeholder="الاختيار الثانى"  wire:model="b"  required  >
                                             </fieldset>
                                             <fieldset class="wrap-input">
                                                 <label for="frm-login-uname">c:</label>
                                                 <input type="text" id="frm-login-uname" name="text" placeholder="الاختيار الثالث" wire:model="c"   required  >
                                             </fieldset>

                                             <fieldset class="wrap-input">
                                                 <label for="frm-login-uname">d:</label>
                                                 <input type="text" id="frm-login-uname" name="text" placeholder="الاختيار الرابع"  wire:model="d"   required  >
                                             </fieldset>
                                             <label>الاجابه الصحيحه</label>
                                             <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" wire:model="true_ans">
                                              <option value="1">choose</option>
                                              <option value="a" >a</option>
                                              <option value="b" >b</option>
                                              <option value="c" >c</option>
                                              <option value="d" >d</option>

                                             </select>
                                             <input type="submit" class="btn btn-submit" value="تعديل سوال" name="submit">
                                         </form>
                                     </div>
                                 </div>
                             </div><!--end main products area-->
                         </div>
                     </div><!--end row-->

                 </div><!--end container-->

             </main>


 </div>


