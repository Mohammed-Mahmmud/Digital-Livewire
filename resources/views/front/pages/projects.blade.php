@extends('front.layouts.master')
@section('front-title', 'Projects')
@section('project-active', 'active')
@section('front-header')
    <x-front.partials.sub-header :slug="'Projects'"></x-front.partials.sub-header>
@endsection
@section('content')
    <x-front.partials.projects></x-front.partials.projects>
@endsection
