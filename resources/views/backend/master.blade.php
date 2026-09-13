<x-main-layout>

    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    @endpush

    <div class="admin-wrapper">

    {{-- =========================
         Sidebar
    ========================== --}}
    @include('backend.includes.sidebar')


    {{-- =========================
         Main Wrapper
    ========================== --}}
    <div class="admin-main">

        {{-- Topbar --}}
        @include('backend.includes.topbar')


        {{-- Main Content --}}
        <main class="admin-content">

            <div class="container-fluid">

                {{-- Flash Messages --}}
                {{-- @include('backend.includes.flash') --}}

                @yield('content')

            </div>

        </main>


        {{-- Footer --}}
        @include('backend.includes.footer')

    </div>

</div>

</x-main-layout>