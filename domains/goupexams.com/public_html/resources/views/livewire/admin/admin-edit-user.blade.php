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
                                         <h1></h1>
                                         <form name="frm-login" wire:submit.prevent="updatestate" enctype="multipart/form-data" >
                                             @csrf
                                             <fieldset class="wrap-title">
                                                <h3 class="form-title">الاسم</h3>
                                                <input type="text" id="frm-login-uname" name="text" placeholder="اسم الاستاذ "  wire:model="name" required  >

                                            </fieldset>
                                             <fieldset class="wrap-title">
                                                 <h3 class="form-title">رقم موبايل</h3>
                                                 <input type="text" id="frm-login-uname" name="text" placeholder="رقم  الموبايل "  wire:model="mobile_phone" required  >

                                             </fieldset>
                                             <fieldset class="wrap-title">
                                                <h3 class="form-title">السنه الدراسيه</h3>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" wire:model="year_type">
                                                    <option selected >Choose...</option>
                                                    <option value="zero" >لايوجد</option>
                                                    <option value="one" >الصف الاول الثانوى</option>
                                                    <option value="two" >الصف الثانى الثانوى</option>
                                                    <option value="three" >الصف الثالث الثانوى</option>
                                                  </select>

                                            </fieldset>

                                             <label>تحديث الحاله</label>
                                             <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" wire:model="case">
                                               <option selected >Choose...</option>

                                               <option value="USR" >ِطالب</option>
                                               <option value="TEC" >استاذ</option>
                                             </select>
                                             <fieldset class="wrap-title">
                                                <h3 class="form-title">صوره الاستاذ</h3>
                                                <input type="file"  name="newimage" placeholder="newimage" :value="newimage"  wire:model="newimage">
                                                   @if($newimage)
                <img src="{{$newimage->temporaryUrl()}}" width="120px" />
                @else
                <img src="{{asset('assets/imageteacher')}}/{{$image}}" width="120px" />
                @endif
                                                @error('image')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                </fieldset>

                                            </fieldset>
                                            <fieldset class="wrap-input" >
                                                <h3 class="form-title">ماده الاستاذ</h3>
                                                 <select   class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="subject_teacher" wire:model="subject_teacher"   >
                                                     <option>select</option>
                                                    <option value="1">English</option>
                                                    <option  value="2"
                                                        >عربى</option>
                                                    <option value="3">
                                                        فيزياء</option>
                                                    <option value="4">
                                                        كيمياء</option>
                                                    <option value="5">
                                                        احياء</option>
                                                    <option value="6">
                                                        جيولوجيا</option>
                                                    <option value="7">
                                                        رياضيات</option>
                                                    <option value="8">
                                                        French</option>
                                                    <option value="9">
                                                        علم النفس</option>
                                                    <option value="10">
                                                        جغرافيا</option>
                                                    <option value="11">
                                                        تاريخ

                                                    </option>

                                                </select>
                                             </fieldset>
                                             <input type="submit" class="btn btn-submit" value="تعديل الحاله" name="submit">
                                         </form>
                                     </div>
                                 </div>
                             </div><!--end main products area-->
                         </div>
                     </div><!--end row-->

                 </div><!--end container-->

             </main>


 </div>


