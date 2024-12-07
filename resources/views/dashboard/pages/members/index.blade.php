@extends('dashboard.layouts.master')
@section('title', 'members')
@section('members-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">members</h4>
            <button type="button" class="btn btn-sm btn-primary mx-3" data-bs-toggle="modal"
                data-bs-target="#createModalToggle">
                Add New
            </button>
            @livewire('dashboard.pages.members.create')
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.members.view')
        @livewire('dashboard.pages.members.update')
        @livewire('dashboard.pages.members.delete')
        <!--/ Contextual Classes -->
    </div>
@endsection
