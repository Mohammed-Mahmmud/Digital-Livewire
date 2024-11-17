@extends('front.layouts.master')
@section('front-title', 'Services')
@section('service-active', 'active')
@section('front-header')
    <x-front.partials.sub-header :slug="'Services'"></x-front.partials.sub-header>
@endsection
@section('content')
    <x-front.partials.service></x-front.partials.service>
    <x-front.partials.newsletter></x-front.partials.newsletter>
    <x-front.partials.testimonial></x-front.partials.testimonial>
@endsection
