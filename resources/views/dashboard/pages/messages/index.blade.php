@extends('dashboard.layouts.master')
@section('title', 'messages')
@section('messages-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">messages</h4>
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.messages.view')
        @livewire('dashboard.pages.messages.delete')
        @livewire('dashboard.pages.messages.show')
        <!--/ Contextual Classes -->
    </div>
@endsection
