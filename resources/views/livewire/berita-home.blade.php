<div>
    <div class="row flex-wrap d-flex ">
        @forelse ($data as $item)
            <div class="col-4">
                <div class="card card-form ">
                    <div class="card-body">
                        <img class="img-berita" src="{{ asset('img/berita/' . $item->nama_gambar) }}" alt="">
                        <h4 class="mt-3">{{ $item->judul }}</h4>
                    </div>
                    <div class="card-footer bg-transparent border-0 ">
                        <a style="all: unset" href="{{ route('berita.detail', $item->id) }}">
                            <button class="btn btn-primary w-100">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Tidak ada berita</p>
        @endforelse
    </div>
</div>
