@extends('front.layouts.master')
@section('front-title', 'About')
@section('about-active', 'active')
@section('front-header')
    <x-front.partials.sub-header :slug="'About'"></x-front.partials.sub-header>
@endsection
@section('content')
    @livewire('components.front.partials.services-component', ['count' => 3])
    @livewire('components.front.partials.skills-component')
    @livewire('components.front.partials.counter-component')
    <x-front.partials.team :count=6 />
@endsection
