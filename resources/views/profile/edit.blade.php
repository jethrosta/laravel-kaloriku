@extends('layouts.app')
@section('style-css')
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
@stop
@section('content')
    <div class="profile-content">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-user-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user-info" type="button" role="tab" aria-controls="v-pills-user-info" aria-selected="true">User Info</button>
            <button class="nav-link" id="v-pills-calories-tab" data-bs-toggle="pill" data-bs-target="#v-pills-calories" type="button" role="tab" aria-controls="v-pills-calories" aria-selected="false">My Calories</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent" style="width: 100%;">
            <div class="tab-pane fade show active" id="v-pills-user-info" role="tabpanel" aria-labelledby="v-pills-user-info-tab">
            <div class="container-fluid px-0 py-0 mx-0">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-12 col-lg-8 col-md-9 col-11 px-4 py-0 text-center" style="width: 800px;">
                        <div class="card my-0" style=" width: 750px;">
                            <h3>User Info</h3>
                            <h5 class="text-center mb-4">Powering world-class companies</h5>
                            <div id="profile-photo" style="position: relative; left: 40%">
                                <img src="{{asset($user->image)}}" id="profile-src" class="justify-content-center" style="width: 400px; height: 150px"/>
                                <input type="hidden" name="profile-src-container" id="calories-src-container" value="" />
                                <a href="#" id="change-image-button">Change image</a>
                            </div>
                            <form class="form-card" onsubmit="event.preventDefault()" style=" width: 750px;">
                                <div class="row justify-content-between text-left" style=" width: 600px;">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Name<span class="text-danger"> *</span></label>
                                        <input type="text" id="fname" name="fname" value="{{$user->name}}" placeholder="Enter your first name" onblur="validate(1)">
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">User Name<span class="text-danger"> *</span></label>
                                        <input type="text" id="lname" name="lname" value="{{$user->user_name}}" placeholder="Enter your last name" onblur="validate(2)">
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label>
                                        <input type="text" id="email" name="email" value="{{$user->email}}" placeholder="" onblur="validate(3)"> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Job title<span class="text-danger"> *</span></label> <input type="text" id="job" name="job" placeholder="" onblur="validate(5)"> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">What would you be using Flinks for?<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)"> </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Request a demo</button> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="tab-pane fade" id="v-pills-calories" role="tabpanel" aria-labelledby="v-pills-calories-tab">...</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
    </div>
    </div>

@stop
