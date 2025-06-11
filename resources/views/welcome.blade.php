@extends('layouts.app')

@section('content')

    <div class="main-banner" id="top">
            <img src="{{asset('assets/images/makanan-indo.jpg')}}" id="bg-video" />

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Tracking your healty food</h6>
                <h2>Try our <em>Kaloriku</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="{{ route('calorie') }}">Try Now</a>
                </div>
            </div>
        </div>
    </div>


    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Online <em>Calorie Tracker</em></h2>
                        <img src="{{asset('assets/imgs/home-images/line-dec.png')}}" alt="waves">
                        <p>Smart Platform for Automatic Food Identification and Calorie Calculation, This app using AI to identifying food types from photos and estimating their calorie content.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('assets/imgs/home-images/kcal.png')}}" alt="First One">
                            </div>
                            <div class="center-content">


                             <a href="{{route('calorie')}}"">
                                <h4>Calculate Calories</h4>
                             </a>

                                <p>
                                    Calculate Calories is a web application that enables users to track and monitor
                                    their calorie intake and expenditure for effective dietary management and fitness goals.
                                </p>
                                <a href="{{route('calorie')}}" class="text-button">Discover App</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        <p>Dont Forget to try our feature !!.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Register now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->


    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 d-flex justify-content-center align-items-center" style="height:600px;">
                    <h1 style="font-size: 5rem; font-weight: bold;">Any Feedback?</h1>
                </div>

                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subject">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

@endsection
