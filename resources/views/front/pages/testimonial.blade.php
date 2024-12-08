@extends('front.layouts.master')
@section('front-title', 'Testimonial')
@section('testimonial-active', 'active')
@section('team-testimonial-active', 'active')
@section('front-header')
    <x-front.partials.sub-header :slug="'Testimonial'"></x-front.partials.sub-header>
@endsection
@section('content')
    <!-- Testimonial Start -->
    @livewire('components.front.partials.testimonial')
    <!-- Testimonial End -->
@endsection
