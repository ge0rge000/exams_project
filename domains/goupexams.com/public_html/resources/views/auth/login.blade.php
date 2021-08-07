{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>


        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<style>

input.btn.btn-submit {
    background: black;
}
</style>
<x-guest-layout>

        <main id="main" class="main-site left-sidebar">

            <div class="container">


                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                        <div class=" main-content-area">
                            <div class="wrap-login-item ">
                                <div class="login-form form-item form-stl">
                                    <x-jet-validation-errors class="mb-4" />
                                    <form name="frm-login" method="POST" action="{{route('login')}}">
                                        @csrf
                                        <fieldset class="wrap-title">
                                            <h3 class="form-title">Log in to your account</h3>
                                        </fieldset>
                                        <fieldset class="wrap-input">
                                            <label for="frm-login-uname">Email Address:</label>
                                            <input type="text" id="frm-login-uname" name="email" placeholder="Type your email address"  required autofocus>
                                        </fieldset>
                                        <fieldset class="wrap-input">
                                            <label for="frm-login-pass">Password:</label>
                                            <input type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">
                                        </fieldset>

                                         
                                        <input type="submit" class="btn btn-submit" value="Login" name="submit">
                                    </form>
                                </div>
                            </div>
                        </div><!--end main products area-->
                    </div>
                </div><!--end row-->

            </div><!--end container-->

        </main>


</x-guest-layout>

