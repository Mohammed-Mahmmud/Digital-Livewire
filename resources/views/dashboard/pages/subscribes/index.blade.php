@extends('dashboard.layouts.master')
@section('title', 'subscribes')
@section('subscribes-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">subscribes</h4>
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.subscribes.view')
        @livewire('dashboard.pages.subscribes.delete')
        <!--/ Contextual Classes -->
    </div>
@endsection
