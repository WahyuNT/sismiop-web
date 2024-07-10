<x-style />

<body>
    <x-sidebar />
    <main class="main-wrapper">
        <x-header />
        <section class="tab-components">

            @yield('content')

            <x-modalheader />
        </section>
    </main>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <x-script />
</body>

</html>
