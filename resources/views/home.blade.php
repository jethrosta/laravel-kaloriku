@extends('layouts.app')

@section('content')
    <div id="slide">
        <div class="slide-item active">
            <img src="{{asset('assets/imgs/slider/hero-slider-1.webp')}}" alt="Slide 1">
            <div class="slide-title">Slide 1 Title</div>
            <div class="slide-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
            <a id="slide-button" href="#">Go</a>
        </div>
        <div class="slide-item">
            <img src="{{asset('assets/imgs/slider/hero-slider-2.webp')}}" alt="Slide 2">
            <div class="slide-title">Slide 2 Title</div>
            <div class="slide-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
            <a id="slide-button" href="#">Learn More</a>
        </div>
        <div class="slide-item">
            <img src="{{asset('assets/imgs/slider/hero-slider-3.webp')}}" alt="Slide 3">
            <div class="slide-title">Slide 3 Title</div>
            <div class="slide-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            <a id="slide-button" href="#">Learn More</a>
        </div>
        <button id="prev">&lt;</button>
        <button id="next">&gt;</button>
    </div>

@endsection
