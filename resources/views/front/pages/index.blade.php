@extends('front.layouts.master')
@section('front-title', 'Agency')
@section('index-active', 'active')
@section('front-header')
    <x-front.partials.main-header :slug="'Home'"></x-front.partials.main-header>
@endsection
@section('content')
    @livewire('components.front.partials.services-component', ['count' => 3])
    @livewire('components.front.partials.skills-component', ['count' => 4])
    @livewire('components.front.partials.counter-component')
    @livewire('components.front.partials.services-component')
    <x-front.partials.newsletter />
    <x-front.partials.projects />
    @livewire('components.front.partials.testimonial', ['count' => 3])
    <x-front.partials.team count=3 />
@endsection
