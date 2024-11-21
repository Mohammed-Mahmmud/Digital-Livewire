@extends('dashboard.layouts.master')
@section('title', 'Settings')
@section('settings-active', 'active')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Settings</h4>
        @livewire('dashboard.pages.settings.update-settings')
        <!-- / Content -->
    </div>
@endsection
