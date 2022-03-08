@extends('layouts.header')

@section('content')
<main class="main-content">
    <div class="container-fluid register-page">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="register">
                    <div class="heading">
                        <h4>Become a part of the
                            <br>
                            <span>Luxe Tribes!</span>
                        </h4>
                    </div>
                    <!-- @if ($errors->any())
                    <span class="alert alert-danger">
                        <strong>{{ $errors->first() }}</strong>
                    </span>
                    @endif -->

                    <form action="{{route('registerroute')}}" role="form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="media mb-2">
                            <img src="https://booking.luxetribes.com/images/icons/avatar.svg" class="mr-3 thumbnail"
                                width="75" alt="Profile photo">
                            <div class="media-body">
                                <h5 class="mt-0">Add your photo (optional)</h5>
                                <small class="text-muted d-block">Supported formats: jpg, jpeg, png.</small>
                                <label for="photo">
                                    <i class="fas fa-upload"></i> click to upload
                                    <input type="file" name="image" id="photo" onchange="displayImage(this)" hidden>
                                </label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control " id="name" name="full_name"
                                        placeholder="Full name" value="" required>
                                        @if($errors->has('full_name'))
                                         <div class="error text-danger">{{ $errors->first('full_name') }}</div>
                                                @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control " id="name" name="username"
                                        placeholder="User Name" value="" required>
                                        @if($errors->has('username'))
                                         <div class="error text-danger">{{ $errors->first('username') }}</div>
                                                @endif
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control datepicker " id="dob" name="date_of_birth"
                                        placeholder="DOB" value="" required>
                                        @if($errors->has('date_of_birth'))
                                         <div class="error text-danger">{{ $errors->first('date_of_birth') }}</div>
                                                @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control " id="email" name="email"
                                        placeholder="Email" value="" required>
                                        @if($errors->has('email'))
                                         <div class="error text-danger">{{ $errors->first('email') }}</div>
                                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control " id="phone" name="phone"
                                        placeholder="Phone name" value="" required>
                                        @if($errors->has('phone'))
                                         <div class="error text-danger">{{ $errors->first('phone') }}</div>
                                                @endif
                                    <span id="output" class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control " name="password"
                                        placeholder="Password" required>
                                        @if($errors->has('password'))
                                         <div class="error text-danger">{{ $errors->first('password') }}</div>
                                                @endif

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">



                                <div class="form-group">
                                    <select name="nationality_id" id="nationality" class="form-control select2 "
                                        required>
                                        <option hidden selected disabled>Select nationality</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Åland Islands</option>
                                        <option value="3">Albania</option>

                                    </select>
                                    @if($errors->has('nationality_id'))
                                         <div class="error text-danger">{{ $errors->first('nationality_id') }}</div>
                                                @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="description" id="about" rows="1" class="form-control  "
                                        placeholder="Tell us about you (optional)"></textarea>
                                    <span class="float-right">200</span>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary w-100">
                                    Create my account
                                </button>
                            </div>
                        </div>

                        <p class="text-muted">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 right-column p-0 position-relative">
                <div class="back-grey"></div>
                <div class="front-img position-absolute">
                    <img src="https://booking.luxetribes.com/images/background/back-4.svg" alt="">
                </div>
                <div class="back-img position-absolute">
                    <img src="https://booking.luxetribes.com/images/background/back-5.svg" alt="">
                </div>
                <div class="back-img position-absolute">
                    <img src="https://booking.luxetribes.com/images/background/back-6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</main>

@endsection