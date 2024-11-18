<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard') }}/assets/" data-template="vertical-menu-template-free">

@include('dashboard.auth.layouts.main-head')

<body>

  @yield('content')
    @include('dashboard.auth.layouts.scripts')
</body>
</html>
