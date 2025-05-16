@include('layouts.beware-header')

    @include('partials.beware-sidebar')

    <!-- Main Content -->
    <div class="main-content">
    @yield('content')
    </div>
@include('layouts.beware-footer')

<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>
{{-- Add your JS files here --}}
</body>

</html>