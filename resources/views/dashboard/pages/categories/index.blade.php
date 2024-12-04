@extends('dashboard.layouts.master')
@section('title', 'categories')
@section('categories-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">categories</h4>
            <button type="button" class="btn btn-sm btn-primary mx-3" data-bs-toggle="modal"
                data-bs-target="#createModalToggle">
                Add New
            </button>
            @livewire('dashboard.pages.categories.create')
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.categories.view')
        @livewire('dashboard.pages.categories.update')
        @livewire('dashboard.pages.categories.delete')
        <!--/ Contextual Classes -->
    </div>
@endsection
