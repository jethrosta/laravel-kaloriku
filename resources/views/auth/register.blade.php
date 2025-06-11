@extends('layouts.app')
@section('style-css')
    <link href="{{ asset('assets/css/wizard-style.css') }}"  rel="stylesheet">
@endsection
@section('content')

    <div class="wrapper">
        <form action="{{ route('register') }}" method="post" id="wizard">
            @csrf
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <h3>Information</h3>
                <div class="form-row">
                    <div class="form-holder">
                        <i class="zmdi zmdi-account"></i>
                        <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-holder">
                        <i class="zmdi zmdi-account"></i>
                        <input id="user_name" placeholder="Username" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name">

                        @error('user_name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <i class="zmdi zmdi-email"></i>
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-holder">
                        <i class="zmdi zmdi-account-box-o"></i>
                        <input id="age" placeholder="Age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-holder">
                        <i class="zmdi zmdi-smartphone-android"></i>
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-holder password">
                        <i class="zmdi zmdi-eye"></i>
                        <input id="password-confirm" placeholder="Password Confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <h3>Details</h3>
                <div class="form-row">
                    <div class="form-holder w-50">
                        <input type="number" class="form-control" name="weight" id="weight" placeholder="Enter your weight" required>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                    <div class="form-holder w-50">
                        <div class="row">
                        <div class="col-md-3">
                            <input name="weight-unit" type="radio" value="2"> <span>lbs</span>
                        </div>
                        <div class="col-md-3">
                            <input name="weight-unit" type="radio" value="1">  <span>Kg</span>
                        </div>
                        </div>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder w-50">
                        <input type="number" class="form-control"  name="height" id="height" placeholder="Enter your height" required>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                    <div class="form-holder w-50">
                        <div class="row">
                            <div class="col-md-3">
                                <input name="height-unit" type="radio" value="2"> <span>Inches</span>
                            </div>
                            <div class="col-md-3">
                                <input name="height-unit" type="radio" value="1"> <span>cm</span>
                            </div>
                        </div>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder w-100">
                        <select name="sex" id="sex" class="form-control @error('sex') is-invalid @enderror">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                        @error('sex')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <h4></h4>
            <section>
                <h3 style="margin-bottom: 16px;">What is Your Goal</h3>
                <div class="form-row">
                    <div class="form-holder w-100">
                        <select class="form-select" name="activity_level" id="activity_level" class="form-control @error('activity_level') is-invalid @enderror">
                            <option value="" disabled selected>Select your activity level</option>
                            <option value="1.2">Little to no exercise</option>
                            <option value="1.375">Light exercise (1−3 days per week)</option>
                            <option value="1.55">Moderate exercise (3−5 days per week)</option>
                            <option value="1.725">Heavy exercise (6−7 days per week)</option>
                            <option value="1.9">Very heavy exercise (twice per day, extra heavy workouts)</option>
                        </select>

                        @error('activity_level')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder w-100">
                        <select name="gain_loss_amount" id="gain_loss_amount" class="form-select" required>
                            <option value="" disabled selected>Select your goal</option>
                            <option value="-1000">Lose 2 Pounds per Week</option>
                            <option value="-750">Lose 1.5 Pounds per Week</option>
                            <option value="-500">Lose 1 Pounds per Week</option>
                            <option value="-250">Lose 0.5 Pounds per Week</option>
                            <option value="0">Stay the Same Weight</option>
                            <option value="250">Gain 0.5 Pound per Week</option>
                            <option value="500">Gain 1 Pound per Week</option>
                            <option value="750">Gain 1.5 Pounds per Week</option>
                            <option value="1000">Gain 2 Pounds per Week</option>
                        </select>
                        @error('gain_loss_amount')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
            </section>

            <!-- SECTION 4 -->
            <h4></h4>
            <section>
                <button class="btn btn-primary" type="submit">Register</button>
            </section>
        </form>
    </div>

    
@endsection
