<x-style />

<body style="background-color: #f4f4f8!important">

    <div class=" ">
        <div class="" id="home">

            <x-header-home />
        </div>

        <section class="">
            <div class="container col-lg-6 col-12 d-flex justify-content-center flex-column mb-5">
                <h2 class="text-center text-black fw-bold my-3">
                    {{ $data->judul }}</h2>
                <img class="rounded w-100 mb-3" src="{{ asset('img/berita/' . $data->nama_gambar) }}" alt="">

                <div class="card border-0  ">
                    <div class="card-body">
                        {!! $data->isi !!}</div>
                </div>
            </div>
    </div>
    </section>

    </div>

    @livewireScripts

    <x-script />
</body>

</html>
