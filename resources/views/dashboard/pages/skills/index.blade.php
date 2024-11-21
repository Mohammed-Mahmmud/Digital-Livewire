@extends('dashboard.layouts.master')
@section('title', 'skills')
@section('skills-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">skills</h4>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.skills.view-skills')
        <!--/ Contextual Classes -->
    </div>
@endsection
