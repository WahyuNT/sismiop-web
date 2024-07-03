<x-style />

<body>
    <x-sidebar />
    <main class="main-wrapper">
        <x-header />
        <section class="tab-components">

            @yield('content')
        </section>
    </main>

    @livewireScripts
    <x-script />
</body>

</html>
