<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout-landing.head')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">

    @include('layout-landing.navbar')

    @yield('content')

    <!-- Footer -->
    @include('layout-landing.footer')

    </div>

    @include('layout-landing.scripts')

</body>

</html>