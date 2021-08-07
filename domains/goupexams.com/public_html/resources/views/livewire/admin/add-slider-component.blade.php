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


                                     <form name="frm-login"  wire:submit.prevent="storeslider" >
                                        @csrf

                            <fieldset class="wrap-input" >
                                <label for="frm-login-uname">صاحب الاعلان</label>
                                <input type="text"  name="name_slider"
                                placeholder="name_slider" :value="name_slider"  wire:model="name_slider">
                                </fieldset>
                                @error('name_slider')
                                <p class="text-danger">{{$message}}</p>
                               @enderror
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
