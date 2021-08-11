@extends('layouts.app')

@section('title','Register')

@section('content')
<div class="login-container row justify-content-center align-items-center mt-5" style="min-height: 100vh;">
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
                            <h1 class="text-center nvbar-brand mb-3">Register</h1>
                            <form class="pb-3" action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Nik</label>
                                    <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="name" autofocus>
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Nama</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">            
                                    @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Confirm  Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                                            
                                </div>                                      
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    <a href="{{route('login')}}" class="btn btn-default btn-block">Login</a>
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
   