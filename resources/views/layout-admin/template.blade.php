<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout-admin.head')
</head>
<body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay page-header-fixed page-header-modern side-scroll main-content-narrow">

        <!-- Header -->
        @include('layout-admin.header')

        <!-- Sidebar menu -->
        @include('layout-admin.navbar')

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content">
                <div class="block">
                    <div class="block-content">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('layout-admin.footer')

    </div>

    @include('layout-admin.scripts')

</body>
</html>
