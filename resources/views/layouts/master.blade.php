<x-style />

<body>
    <x-sidebar />
    <main class="main-wrapper">
        <x-header />
        <section class="tab-components">

            @yield('content')
        </section>
    </main>


    <x-script />
</body>

</html>
