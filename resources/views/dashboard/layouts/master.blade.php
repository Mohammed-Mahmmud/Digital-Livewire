<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard') }}/assets/" data-template="vertical-menu-template-free">

@include('dashboard.layouts.partials.main-head')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-dashboard.layouts.sidebar />

            <!-- Layout container -->
            <div class="layout-page">
                @include('dashboard.layouts.partials.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                    @include('dashboard.layouts.partials.footer')
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    @include('dashboard.layouts.partials.scripts')

</body>

</html>
