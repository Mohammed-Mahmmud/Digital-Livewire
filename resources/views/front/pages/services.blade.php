@extends('front.layouts.master')
@section('front-title', 'Services')
@section('service-active', 'active')
@section('front-header')
    <x-front.partials.sub-header :slug="'Services'"></x-front.partials.sub-header>
@endsection
@section('content')
    @livewire('components.front.partials.services-component')
    <x-front.partials.newsletter />
    @livewire('components.front.partials.testimonial', ['count' => 3])
@endsection
