@extends('dashboard.layouts.master')
@section('title', 'counters')
@section('counters-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">counters</h4>
            <button type="button" class="btn btn-sm btn-primary mx-3" data-bs-toggle="modal"
                data-bs-target="#createModalToggle">
                Add New
            </button>
            @livewire('dashboard.pages.counters.create')
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.counters.view')
        @livewire('dashboard.pages.counters.update')
        @livewire('dashboard.pages.counters.delete')
        <!--/ Contextual Classes -->
    </div>
@endsection
