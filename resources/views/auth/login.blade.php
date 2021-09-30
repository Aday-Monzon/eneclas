@extends('layouts.template')

@section('content')
 <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                       
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->

         <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">

                            <!-- Log In Form -->
                            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="mb-4 form-floating">
                                 <input type="email" id="floatingInput" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="floatingInput" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                </div>
                            

                            <div class="col-md-6">
                               

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                             <div class="mb-4 form-floating">
                                  <input type="password" id="floatingPassword" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="floatingPassword" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                </div>
                            

                            <div class="col-md-6">
                               

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="mb-4 form-check">
                                     <input class="form-check-input" type="checkbox" name="remember"id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleCheck1"> {{ __('Recordarme') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="form-control-submit-button">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-md-6">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Recordar Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
    </form>
                            <!-- end of log in form -->

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->
 

@endsection
