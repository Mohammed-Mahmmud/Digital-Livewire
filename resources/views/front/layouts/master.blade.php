<!DOCTYPE html>
<html lang="en">

@include('front.layouts.partials.main-head')

<body>
    <div class="container-xxl bg-white p-0">
        @include('front.layouts.partials.spinner')
        <div class="container-xxl position-relative p-0">
            <x-front.layouts.navbar></x-front.layouts.navbar>
            <x-front.partials.main-header></x-front.partials.main-header>
        </div>
        @yield('content')
        <x-front.layouts.footer></x-front.layouts.footer>
        @include('front.layouts.partials.scroll-top')
    </div>
    @include('front.layouts.partials.scripts')
</body>

</html>
