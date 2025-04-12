@extends('index')

@section('body')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>
                <div class="card-body">
                    <form action="/transaction" method="post"  id="addTransaction" name="addTransaction">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                                        placeholder="Nama">
                                    @error('nama_pelanggan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="no_meja" name="no_meja"
                                        placeholder="Nomor Meja">
                                    @error('no_meja')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="fw-bold">Makanan</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Bakso Tenes</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="bakso_tenes" name="bakso_tenes"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Bakso Urat</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="bakso_urat" name="bakso_urat"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Bakso Biasa</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="bakso_biasa" name="bakso_biasa"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Bakso</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="bakso" name="bakso"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Indomie Bakso Tenes</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="indomie_bakso_tenes"
                                        name="indomie_bakso_tenes" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Indomie Bakso Urat</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="indomie_bakso_urat"
                                        name="indomie_bakso_urat" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Indomie Bakso Biasa</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="indomie_bakso_biasa"
                                        name="indomie_bakso_biasa" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Pangsit Bakso Tenes</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="pangsit_bakso_tenes"
                                        name="pangsit_bakso_tenes" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Pangsit Bakso Urat</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="pangsit_bakso_urat"
                                        name="pangsit_bakso_urat" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Pangsit Bakso Biasa</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="pangsit_bakso_biasa"
                                        name="pangsit_bakso_biasa" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Pangsit Biasa</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="pangsit_biasa"
                                        name="pangsit_biasa" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="fw-bold">Tambahan</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Es teh</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="es_teh" name="es_teh"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Es jeruk</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="es_jeruk" name="es_jeruk"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Le Minerale</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="le_minerale" name="le_minerale"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Teh Pucuk</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="teh_pucuk" name="teh_pucuk"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Kerubak</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="kerubak" name="kerubak"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Buras</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="buras" name="buras"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Kacang</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="kacang" name="kacang"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <label>Rempeyek</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="number" min=0 class="form-control" id="rempeyek" name="rempeyek"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <button type="submit" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Buat Pesanan</span>
                                </button>
                            </div>
                            <div class="col-xl-6">
                                <p name="jumlah" id="jumlah">Rp. </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    {{-- <script>
        $('#addTransaction').submit(function(e) {
            e.preventDefault()
            var form = $(this).serialize()
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '/transaction',
                        type: 'POST',
                        dataType: 'json',
                        data: form,
                        success: function(data) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });
                            console.log(data);
                        }
                    })
                }
            });
        });
    </script> --}}
@endsection
