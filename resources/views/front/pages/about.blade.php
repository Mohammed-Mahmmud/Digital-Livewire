@extends('front.layouts.master')
@section('front-title', 'About')
@section('about-active', 'active')
@section('front-header')
    <x-front.partials.sub-header :slug="'About'"></x-front.partials.sub-header>
@endsection
@section('content')
    <x-front.partials.feature />
    <x-front.partials.about />
    <x-front.partials.facts />
    <x-front.partials.team count=6/>
@endsection
