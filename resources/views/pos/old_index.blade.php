

@extends('index')

@section('body')
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        @foreach ($products as $p)
                            <div class="col-xl-4">
                                <button class="btn" type="button" name="{{ $p->id }}" id="{{ $p->id }}"
                                    onClick="addToChart({{ $p }})">
                                    <div class="card mb-4">
                                        <img src="img/bakso_google.jpeg" class="rounded float-start img-fluid"
                                            alt="...">
                                        <div class="card-body">
                                            <p class="fw-bold"> {{ $p->nama_produk }} </p>
                                            <p> Rp. {{ $p->harga }} </p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Transaksi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form id="addTransaction" name="addTransaction">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <input type="number" min=0 class="form-control" id="no_meja" name="no_meja"
                                        placeholder="Nomor Meja">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Kauntitas</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
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
    <script>
        $('#addTransaction').submit(function(e) {
            e.preventDefault()
            var form = $(this).serialize()

            $.ajax({
                url: '/transaction',
                type: 'POST',
                dataType: 'json',
                data: form,
                success: function(data) {
                    // $('#add').modal('hide')
                    // $('#sbuname').val('')
                    // $('#idring').val('')
                    // $('#hostname').val('')
                    // table.ajax.reload()
                    // Swal.fire({
                    //     icon: "success",
                    //     title: "Your work has been saved",
                    //     showConfirmButton: false,
                    //     timer: 1500
                    // });
                    console.log(data);
                    
                }
            })
        });

        function addToChart(product) {
            let html_tag = `<tr id=row-` + product.id + `>
                            <td>
                                <input type="text" class="form-control" name="` + product.nama_produk + `" value="` +product.id + `">
                            </td>
                                <td><input type="number" min=0 class="form-control" name="kuantitas_` + product.nama_produk + `" value=1></td>
                            <td>
                                <button type="button" class="btn btn-secondary" onClick=deleteFromChart(` + product
                .id + `)>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                    </svg>
                                </button>
                            </td>
                          </tr>`
            $('#table tr:last').after(html_tag);
            console.log(product);
        }

        function deleteFromChart(product_id) {
            console.log("fuad" + product_id);

            $('#row-' + product_id).remove();
        }
    </script>
@endsection
