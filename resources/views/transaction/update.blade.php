@extends('index')

@section('body')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Transaksi</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h4 class="ml-2" name="jumlah" id="jumlah">Rp. {{ number_format($transaction->jumlah) }}</h4>
                    </div>
                    <form action="/api/transaction" method="post" id="addTransaction" name="addTransaction">
                        @method('put')
                        @csrf
                        <input type="text" hidden class="form-control" id="id" name="id" value="{{ $transaction->id }}">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-1">
                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                                        placeholder="Nama" value="{{ $transaction->nama_pelanggan }}" disabled>
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
                                        value="{{ $transaction->no_meja }}" disabled>
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
                                        value="{{ $transaction->bakso_tenes }}">
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
                                        value="{{ $transaction->bakso_urat }}">
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
                                        value="{{ $transaction->bakso_biasa }}">
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
                                        value="{{ $transaction->bakso }}">
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
                                        name="indomie_bakso_tenes" value="{{ $transaction->indomie_bakso_tenes }}">
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
                                        name="indomie_bakso_urat" value="{{ $transaction->indomie_bakso_urat }}">
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
                                        name="indomie_bakso_biasa" value="{{ $transaction->indomie_bakso_biasa }}">
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
                                        name="pangsit_bakso_tenes" value="{{ $transaction->pangsit_bakso_tenes }}">
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
                                        name="pangsit_bakso_urat" value="{{ $transaction->pangsit_bakso_urat }}">
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
                                        name="pangsit_bakso_biasa" value="{{ $transaction->pangsit_bakso_biasa }}">
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
                                        name="pangsit_biasa" value="{{ $transaction->pangsit_biasa }}">
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
                                        value="{{ $transaction->es_teh }}">
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
                                        value="{{ $transaction->es_jeruk }}">
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
                                        value="{{ $transaction->le_minerale }}">
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
                                        value="{{ $transaction->teh_pucuk }}">
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
                                        value="{{ $transaction->kerubak }}">
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
                                        value="{{ $transaction->buras }}">
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
                                        value="{{ $transaction->kacang }}">
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
                                        value="{{ $transaction->rempeyek }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Ubah Pesanan</span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
