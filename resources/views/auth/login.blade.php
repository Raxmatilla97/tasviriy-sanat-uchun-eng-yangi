@extends('artuz.layouts.makets.admin.sign-in-up')

@section('content')


<div class="auth-layout-wrap" style="background-image: url({{ ('admin/assets/images/photo-wide-4.jpg') }})">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="auth-logo text-center mb-4">
                            <img src="{{ ('admin/assets/images/logo.png') }}" alt="">
                        </div>
                        <h1 class="mb-3 text-18">{{ __('Saytga kirish') }}</h1>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            @error('email')
                            <span class="btn btn-block btn-outline-danger btn-danger" role="alert">
                                <strong style="bottom: 15px;">{{ __('Mail yoki parolda xatolik bor') }}</strong>
                                
                                <br>
                            </span>
                            @enderror

                           

                            <div class="form-group">
                                <label for="email">{{ __('Email manzilingiz') }}</label>
                                <input id="email" class="form-control form-control-rounded" name="email" type="email">

                                      
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Parolingiz') }}</label>
                                <input id="password" class="form-control form-control-rounded" name="password" type="password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('Parolda xatolik') }}</strong>
                                        </span>
                                        @enderror
                                
                            </div>

                            <div>
                                <div>
                                    <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">
                                        {{ __('Kirish') }}
                                    </button>
    
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Parolingizni unutdingizmi?') }}
                                            </a>
                                        @endif
                                </div>
                            </div>

                        </form>

                        {{-- <div class="mt-3 text-center">
                            <a href="#" class="text-muted"><u>Forgot Password?</u></a>
                        </div> --}}
                    </div>
                </div>

            
                <div class="col-md-6 text-center " style="background-size: cover;background-image: url(http://gull-html-laravel.ui-lib.com/assets/images/photo-long-3.jpg">
                    <div class="pr-3 auth-right">
                        <h3><center>Bu funksiyalar hali ishlamaydi</center></h3>
                        <a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="http://gull-html-laravel.ui-lib.com/sessions/signup.html">
                            <i class="i-Mail-with-At-Sign"></i> Sign up with Email
                        </a>
                        <a class="btn btn-rounded btn-outline-primary btn-outline-google btn-block btn-icon-text">
                            <i class="i-Google-Plus"></i> Sign up with Google
                        </a>
                        <a class="btn btn-rounded btn-outline-primary btn-block btn-icon-text btn-outline-facebook">
                            <i class="i-Facebook-2"></i> Sign up with Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
