<div>
   <style>

    input.btn.btn-submit {
        background: black;
    }
      label.load {
    color: white;
    border: 2px solid;
    border-radius: 18px;
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
                                        <form name="frm-login" wire:submit.prevent="storeQuestion" >
                                            @csrf
                                            <fieldset class="wrap-title">
                                                <h3 class="form-title">السوال</h3> 
                                                <label>فى حاله انك سوف تضف صوره ولا تكتب سوال ضع نقطه فى مكان سوال</label>
                                                <input dir='auto' type="text" id="frm-login-uname" name="text" placeholder="اضف السوال"  wire:model="question" required  >

                                            </fieldset>
                                              @error('question')
                                            <p class="text-danger">{{$message}}</p>
                                           @enderror
                                              <fieldset class="wrap-title">
                                                  <label>لا تضغط اضف سوال الى ان تظهر صوره إن اضفت صوره</label>
                                                <h3 class="form-title">صوره</h3>
                                                <input   dir='auto' type="file" id="frm-login-uname" name="text" placeholder="اضف السوال"  wire:model="image"    >

                                            </fieldset>
                                                                                        <label class="load"wire:loading wire:target="image">Uploading image......</label>

                                            @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="120px" />
                                            @endif
                                            <fieldset class="wrap-input">
                                                <label for="frm-login-uname">a:</label>
                                                <input dir='auto' type="text" id="frm-login-uname" name="text" placeholder="الاختيار الاول"  wire:model="a"  required  >
                                            </fieldset>
                                            @error('a')
                                            <p class="text-danger">{{$message}}</p>
                                           @enderror
                                            <fieldset class="wrap-input">
                                                <label for="frm-login-uname">b:</label>
                                                <input dir='auto' type="text" id="frm-login-uname" name="text" placeholder="الاختيار الثانى"  wire:model="b"  required  >
                                            </fieldset>
                                               @error('b')
                                            <p class="text-danger">{{$message}}</p>
                                           @enderror
                                            <fieldset class="wrap-input">
                                                <label for="frm-login-uname">c:</label>
                                                <input  dir='auto' type="text" id="frm-login-uname" name="text" placeholder="الاختيار الثالث" wire:model="c"   required  >
                                            </fieldset>
                                            @error('c')
                                            <p class="text-danger">{{$message}}</p>
                                           @enderror
                                            <fieldset class="wrap-input">
                                                <label for="frm-login-uname">d:</label>
                                                <input dir='auto' type="text" id="frm-login-uname" name="text" placeholder="الاختيار الرابع"  wire:model="d"   required  >
                                            </fieldset>
                                             @error('d')
                                            <p class="text-danger">{{$message}}</p>
                                           @enderror
                                            <label>الاجابه الصحيحه</label>
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" wire:model="true_ans" required>
                                              <option value="1">choose</option>
                                              <option value="a" >a</option>
                                              <option value="b" >b</option>
                                              <option value="c" >c</option>
                                              <option value="d" >d</option>

                                            </select>
                                              @error('true_ans')
                                            <p class="text-danger">{{$message}}</p>
                                           @enderror
                                            <input type="submit" class="btn btn-submit" value="اضف سوال" name="submit">
                                        </form>
                                    </div>
                                </div>
                            </div><!--end main products area-->
                        </div>
                    </div><!--end row-->

                </div><!--end container-->

            </main>


</div>


