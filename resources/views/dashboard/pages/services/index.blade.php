@extends('dashboard.layouts.master')
@section('title', 'services')
@section('services-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">services</h4>
            <button type="button" class="btn btn-sm btn-primary mx-3" data-bs-toggle="modal"
                data-bs-target="#createModalToggle">
                Add New
            </button>
            @livewire('dashboard.pages.services.create')
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.services.view')
        @livewire('dashboard.pages.services.update')
        @livewire('dashboard.pages.services.delete')
        <!--/ Contextual Classes -->
    </div>
@endsection
