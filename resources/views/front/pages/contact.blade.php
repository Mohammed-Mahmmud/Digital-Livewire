@extends('front.layouts.master')
@section('front-title', 'Digital Agency - Contact')
@section('front-header')
    <x-front.partials.sub-header :slug="'Contact'"></x-front.partials.sub-header>
@endsection
@section('content')
    <x-front.partials.contact></x-front.partials.contact>
@endsection
