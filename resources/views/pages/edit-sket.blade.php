@extends('layouts.master')
@section('content')
    <form method="POST" action="{{ route('store.sket') }}">
        @csrf
        <input hidden type="text" name="id" value="{{ $sket->id }}" id="">
        <div class="container-fluid d-flex justify-content-center">
            <div class="card border-0 bg-transparent mt-3">
                <div class="wrapper-sign border-0 table-responsive  mt-lg-1" id="tempatTTD" style="display: block">
                    <canvas id="signature-pad_sket" class="signature-pad_sket sket-denah" width=1080 height=500></canvas>
                </div>
                <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                    {{-- <button wire:click="cancelEditSket" type="button" class="btn rounded-pill btn-primary py-0 mb-2 mt-1"
                    id="batal_sket">Batal</button> --}}
                    <button type="button" class="btn rounded-pill btn-warning py-0 mb-2 mt-1" id="undo_sket">Undo</button>
                    <button type="button" class="btn rounded-pill btn-danger py-0 mb-2 mt-1" id="clear_sket">Clear</button>

                    <button type="submit" wire:click="simpanSket" class="btn rounded-pill btn-success py-0 mb-2 mt-1"
                        id="">Simpan</button>

                </div>
                <textarea hidden wire:model="newsket" name="sket_tanda_tangan" id="tanda_tangan_sket"></textarea>
            </div>
        </div>
    </form>
    <script>
        var signaturePad_sket = new SignaturePad(document.getElementById('signature-pad_sket'), {
            backgroundColor: 'rgba(255, 255, 255, 0)',
            penColor: 'rgb(0, 0, 0)'
        });
        loadSket()


        var batalButton_sket = document.getElementById('batal_sket');
        var undoButton_sket = document.getElementById('undo_sket');
        var redoButton_sket = document.getElementById('redo_sket');
        var clearButton_sket = document.getElementById('clear_sket');
        var canvasPad_sket = document.getElementById('signature-pad_sket');

        canvasPad_sket.addEventListener('click', function(event) {
            if (signaturePad_sket.isEmpty()) {
                alert("Silahkan Digambar terlebih dahulu.");
            } else {
                storeSket()
            }
        });


        clearButton_sket.addEventListener('click', function(event) {
            event.preventDefault();
            signaturePad_sket.clear();
            document.getElementById('tanda_tangan_sket').value = "";
        });

        undoButton_sket.addEventListener("click", function(event) {
            var data = signaturePad_sket.toData();
            if (data) {
                data.pop(); // remove the last dot or line
                signaturePad_sket.fromData(data);
                storeSket()
            }
        });

        function storeSket() {
            var data_sket = signaturePad_sket.toDataURL('image/png');
            var tandaTanganInput_sket = document.getElementById('tanda_tangan_sket');
            tandaTanganInput_sket.value = data_sket;
        }


        function loadSket() {
            var sketbase64 = {!! json_encode($sket64) !!}
            var image = new Image();
            image.onload = function() {
                signaturePad_sket.fromDataURL(sketbase64);

            };
            image.src = sketbase64;
        }

        batalButton_sket.addEventListener("click", function(event) {
            event.preventDefault();
            signaturePad_sket.clear();
            document.getElementById('tanda_tangan_sket').value = "";
            loadSket()
        });
    </script>
@endsection
