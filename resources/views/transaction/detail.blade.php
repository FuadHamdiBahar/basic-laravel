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
                        @csrf
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
                        <div class="row">
                            <div class="col-xl-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Pesanan</td>
                                            <td>Kuantitas</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bakso Tenes</td>
                                            <td>{{ $transaction->bakso_tenes }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bakso Urat</td>
                                            <td>{{ $transaction->bakso_urat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bakso Biasa</td>
                                            <td>{{ $transaction->bakso_biasa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bakso</td>
                                            <td>{{ $transaction->bakso }}</td>
                                        </tr>
                                        <tr>
                                            <td>Indomie Bakso Tenes</td>
                                            <td>{{ $transaction->indomie_bakso_tenes }}</td>
                                        </tr>
                                        <tr>
                                            <td>Indomie Bakso Urat</td>
                                            <td>{{ $transaction->indomie_bakso_urat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Indomie Bakso Biasa</td>
                                            <td>{{ $transaction->indomie_bakso_biasa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pangsit Bakso Tenes</td>
                                            <td>{{ $transaction->pangsit_bakso_tenes }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pangsit Bakso Urat</td>
                                            <td>{{ $transaction->pangsit_bakso_urat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pangsit Bakso Biasa</td>
                                            <td>{{ $transaction->pangsit_bakso_biasa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pangsit Biasa</td>
                                            <td>{{ $transaction->pangsit_biasa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Es teh</td>
                                            <td>{{ $transaction->es_teh }}</td>
                                        </tr>
                                        <tr>
                                            <td>Es jeruk</td>
                                            <td>{{ $transaction->es_jeruk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Le Minerale</td>
                                            <td>{{ $transaction->le_minerale }}</td>
                                        </tr>
                                        <tr>
                                            <td>Teh Pucuk</td>
                                            <td>{{ $transaction->teh_pucuk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kerubak</td>
                                            <td>{{ $transaction->buras }}</td>
                                        </tr>
                                        <tr>
                                            <td>Buras</td>
                                            <td>{{ $transaction->buras }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kacang</td>
                                            <td>{{ $transaction->kacang }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rempeyek</td>
                                            <td>{{ $transaction->rempeyek }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-6">

                            </div>

                            <div class="col-xl-6 d-flex justify-content-end">
                                @if ($transaction->diantar == 0)
                                    <a href="/api/diantar/{{ $transaction->id }}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                            </svg>
                                        </span>
                                        <span class="text">Pesanan Selesai</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
