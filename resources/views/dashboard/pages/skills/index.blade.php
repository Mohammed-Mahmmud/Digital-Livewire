@extends('dashboard.layouts.master')
@section('title', 'skills')
@section('skills-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">skills</h4>
            <button type="button" class="btn btn-sm btn-primary mx-3" data-bs-toggle="modal"
                data-bs-target="#createModalToggle">
                Add New
            </button>
            @livewire('dashboard.pages.skills.create')
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.skills.view')
        @livewire('dashboard.pages.skills.update')
        @livewire('dashboard.pages.skills.delete')
        <!--/ Contextual Classes -->
    </div>
@endsection
