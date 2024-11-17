@extends('front.layouts.master')
@section('front-title', 'Digital Agency - Not Found')
@section('front-header')
    <x-front.partials.sub-header :slug="'Not Found'"></x-front.partials.sub-header>
@endsection
@section('content')
    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to
                        our home page or try to use a search?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('front.pages', ['slug' => 'index']) }}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection