@extends('front.layouts.master')
@section('front-title', 'Digital Agency')
@section('front-header')
    <x-front.partials.main-header :slug="'Home'"></x-front.partials.main-header>
@endsection
@section('content')
    <x-front.partials.feature></x-front.partials.feature>
    <x-front.partials.about></x-front.partials.about>
    <x-front.partials.facts></x-front.partials.facts>
    <x-front.partials.service></x-front.partials.service>
    <x-front.partials.newsletter></x-front.partials.newsletter>
    <x-front.partials.projects></x-front.partials.projects>
    <x-front.partials.testimonial></x-front.partials.testimonial>
    <x-front.partials.team></x-front.partials.team>
@endsection
