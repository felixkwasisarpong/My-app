@extends('layouts.header')

@section('content')
<main class="main-content">
                <div class="container-fluid login-page">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="container">
                    <div class="justify-content-center">
                        <div class="login">
                            <div class="heading">
                                <h4>Welcome Back!</h4>
                            </div>
                            @if ($errors->any())
                    <span class="alert alert-danger">
                        <strong>{{ $errors->first() }}</strong>
                    </span>
                    @endif
                            <form  method="POST" action="{{route('loginroute')}}">
                                @csrf

                                    <div class="form-group">
                                    <input type="text" class="form-control " id="username" name="username" placeholder="username" required>
                                                                    </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control " name="password" placeholder="Password" required>
    
                                                                    </div>

                                <div class="form-group row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Login
                                        </button>
                                    </div>
                                </div>

                                <p class="text-muted">Don&#039;t have an account? <a href="{{route('register')}}">Register</a></p>
                                
                                <p class="text-muted">Forgot Pasword? <a href="https://booking.luxetribes.com/password/reset">Reset Password?</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 p-0">
                <div class="back-grey"></div>
                <div class="front-img position-absolute">
                    <img src="https://booking.luxetribes.com/images/background/back-8.jpeg" width="400">
                </div>
                <div class="back-img position-absolute">
                    <img src="https://booking.luxetribes.com/images/background/back-7.png" alt="">
                </div>
                <div class="back-img position-absolute">
                    <img src="https://booking.luxetribes.com/images/background/back-6.jpeg" width="180">
                </div>
            </div>
        </div>
    </div>
        </main>

        @endsection