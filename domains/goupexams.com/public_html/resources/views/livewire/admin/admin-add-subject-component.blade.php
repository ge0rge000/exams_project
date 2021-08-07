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

    </style>
        <main id="main" class="main-site left-sidebar">

            <div class="container">


                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                        <div class=" main-content-area">
                            <div class="wrap-login-item ">
                                <div class="login-form form-item form-stl">


                                     <form name="frm-login"  wire:submit.prevent="storeimage" >
                                        @csrf

                                            <fieldset class="wrap-input" >
                                                <label for="frm-login-uname">Subject Name</label>
                                                 <select   name="subject" wire:model="name_subject"   >
                                                     <option>select</option>
                                                    <option value="English">English</option>
                                                    <option  value="عربى"
                                                        >عربى</option>
                                                    <option value="فيزياء">
                                                        فيزياء</option>
                                                    <option value="كيمياء">
                                                        كيمياء</option>
                                                    <option value="احياء">
                                                        احياء</option>
                                                    <option value="رياضيات">
                                                        جيولوجيا</option>
                                                    <option value="رياضيات">
                                                        رياضيات</option>
                                                    <option value="French">
                                                        French</option>
                                                    <option value="علم النفس">
                                                        علم النفس</option>
                                                    <option value="جغرافيا">
                                                        جغرافيا</option>
                                                    <option value="تاريخ">
                                                        تاريخ

                                                    </option>

                                                </select>
                                             </fieldset>
                                             <fieldset class="wrap-input">
                                                <label for="frm-reg-lname">image</label>
                                                <input type="file"  name="image" placeholder="image" :value="image"  wire:model="image">
                                                @if($image)
                                                <img src="{{$image->temporaryUrl()}}" width="120px" />
                                                @endif
                                                @error('image')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                </fieldset>
                                                <input type="submit" class="btn btn-sign" value="add" name="register">

                                    </form>
                                </div>
                            </div>
                        </div><!--end main products area-->
                    </div>
                </div><!--end row-->

            </div><!--end container-->

        </main>

    </div>
