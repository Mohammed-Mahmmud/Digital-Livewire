@extends('front.layouts.master')
@section('front-title', 'Our Team')
@section('team-active', 'active')
@section('team-testimonial-active', 'active')
@section('front-header')
    <x-front.partials.sub-header :slug="'Our Team'"></x-front.partials.sub-header>
@endsection
@section('content')
    <x-front.partials.team />
@endsection
