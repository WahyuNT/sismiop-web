<x-style />

<body style="background-color: #f4f4f8!important">

    <div class=" ">
        <div class="" id="home">

            <x-header-home />
        </div>


        <section class="tab-components container">
            <img class="img-home" src="{{ asset('img/bg.png') }}" alt="">
        </section>
        <section id="visi" class="mt-4  py-5" style="background-color: #e7eef3">
            <div class="d-flex flex-wrap-reverse flex-wrap justify-content-between align-items-center container">
                <div class="col-lg-6 col-12">
                    <h1 class="text-center text-primary d-lg-block d-none">Visi</h1>
                    <img height="340px" src="{{ asset('img/visi.webp') }}" alt="">
                </div>
                <div class="col-lg-6 col-12">

              
                    <h1 class="text-center text-primary d-lg-none d-block">Visi</h1>
                    <div class="card card-form border-0 w mt-3">
                        <div class="card-body">

                            <h4 class="text-center">Terwujudnya Peningkatan Pengelolaan Pendapatan Daerah di Kabupaten
                                Kepulauan Sula melalui Pelayanan yang Berkualitas</h4>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="misi" class="py-5  ">
            <div class="d-flex flex-wrap-reverse flex-wrap justify-content-between align-items-center container">
                <div class="col-12 col-lg-6 ">

                    <h1 class="text-center text-primary d-lg-block d-none">Misi</h1>
                    <div class="row flex-wrap justify-content-center d-flex">
                        <div class="col-lg-4 col-12 px-2 mb-3">

                            <div class="card card-form h-100 border-0 w mt-3">
                                <div class="">

                                    <h5 class="text-center">Pendataan Objek Pajak dan Objek Retribusi secara optimal dan
                                        akurat.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 px-2 mb-3">

                            <div class="card card-form h-100 border-0 w mt-3">
                                <div class="">

                                    <h5 class="text-center">Pendataan Sumber - Sumber Potensi Pajak dan Retribusi yang
                                        baru.
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 px-2 mb-3">

                            <div class="card card-form h-100 border-0 w mt-3">
                                <div class="">

                                    <h5 class="text-center">Sosialisasi sadar pajak kepada Masyarakat.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 px-2 mb-3">

                            <div class="card card-form h-100 border-0 w mt-3">
                                <div class="">

                                    <h5 class="text-center">Meningkatkan Pelayanan terhadap wajib Pajak dan wajib
                                        Retribusi.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 px-2 mb-3">

                            <div class="card card-form h-100 border-0 w mt-3">
                                <div class="">

                                    <h5 class="text-center">Meningkatkan sarana dan prasarana bagi wajib pajak dan wajib
                                        Retribusi. </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center flex-wrap">
                    <h1 class="text-center d-lg-none d-block text-primary">Misi</h1>
                    <img height="340px" src="{{ asset('img/mission.webp') }}" alt="">
                </div>


            </div>
        </section>
        <section id="berita" style="background-color: #e7eef3" class="py-5">
            <div class="container">

                <h2 class="text-center text-primary fw-bold mb-2">Berita</h2>
                @livewire('berita-home')
            </div>
        </section>

    </div>

    @livewireScripts

    <x-script />
</body>

</html>
