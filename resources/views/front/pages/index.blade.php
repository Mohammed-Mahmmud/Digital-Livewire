@extends('front.layouts.master')
@section('front-title', 'Agency')
@section('index-active', 'active')
@section('front-header')
    <x-front.partials.main-header :slug="'Home'"></x-front.partials.main-header>
@endsection
@section('content')
    <x-front.partials.feature />
    <x-front.partials.about />
    <x-front.partials.facts />
    <x-front.partials.service />
    <x-front.partials.newsletter />
    <x-front.partials.projects />
    <x-front.partials.testimonial />
    <x-front.partials.team count=3 />
@endsection
