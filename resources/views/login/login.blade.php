@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="login-container row justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mb-5">
            <div class="col-12 col-md-6  text-center mb-3">
                <!-- <img class="img-fluid" src="images/gunung-nona.jpg" alt=""> -->
                <h1>Slow But Sure</h1>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="row justify-content-center d-flex align-content-center">
                    <div class="col-8">
                        <div class="card p-4">
                            <h1 class="text-center nvbar-brand mb-3">Login</h1>
                            <form class="pb-3" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">NIK Karyawan</label>
                                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>
                                    @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror   
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                <a href="{{route('register')}}" class="btn btn-default btn-block">Register</a>
                                <p class="text-center mt-3 d-none">
                                    <a class="text-muted" href="#">Saya lupa password</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection       


