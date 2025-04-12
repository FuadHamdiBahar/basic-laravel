<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('partials.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th># id</th>
                                            <th>Nama</th>
                                            <th>No_meja</th>
                                            <th>Jumlah</th>
                                            <th>Koki</th>
                                            <th>Kasir</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th># id</th>
                                            <th>Nama</th>
                                            <th>No_meja</th>
                                            <th>Jumlah</th>
                                            <th>Koki</th>
                                            <th>Kasir</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($transactions as $t)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $t->nama_pelanggan }}</td>
                                                <td>{{ $t->no_meja }}</td>
                                                <td>Rp. {{ number_format($t->jumlah) }}</td>
                                                <td>
                                                    @if ($t->diantar == 0)
                                                        <a class='btn btn-small btn-success'
                                                            href="/api/diantar/{{ $t->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-check"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                            </svg>
                                                        </a>
                                                    @endif

                                                    <a href="/transaction/{{ $t->id }}"
                                                        class="btn btn-small btn-facebook">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-eye"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                            <path
                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if ($t->diantar == 1)
                                                        @if ($t->dibayar == 0)
                                                            <a class="btn btn-small btn-success"
                                                                href="/api/dibayar/{{ $t->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-check" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                </svg>
                                                            </a>
                                                        @endif

                                                        @if ($t->dibayar == 1)
                                                            <span class="badge text-bg-success">Dibayar</span>   
                                                        @endif
                                                    @endif
                                                    @if ($t->dibayar == 0)
                                                        <a class="btn btn-small btn-warning"
                                                            href="/transaction/update/{{ $t->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pencil"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                                            </svg>
                                                        </a>
                                                        <form action="/api/transaction" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="text" hidden id="id" name="id"
                                                                value="{{ $t->id }}">
                                                            <button type="submit" class="btn btn-small btn-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
        //   $(document).ready(function() {
        //     loadTable()
        // });
        // function loadTable() {
        //     table = new DataTable('#datatable', {
        //         ajax: '/api/interface/' + hostid,
        //         bDestroy: true,
        //         columns: [{
        //                 data: 'interface_name'
        //             },
        //             {
        //                 data: 'description'
        //             },
        //             {
        //                 data: 'capacity'
        //             },
        //             {
        //                 data: 'status'
        //             },
        //             {
        //                 data: 'created_by'
        //             },
        //             {
        //                 data: 'updated_by'
        //             },
        //             {
        //                 data: 'interfaceid',
        //                 render: function(data) {
        //                     return `<button class='btn btn-small btn-warning' type='button' onclick='edit(` +
        //                         data + `)'><i class="ri-pencil-line"></i></button> 
    //                     <button class='btn btn-small btn-danger' type='button' onclick="hapus(` + data +
        //                         `)"><i class="ri-delete-bin-7-line"></i></button>`
        //                 }
        //             }
        //         ]
        //     })
        // }
        // console.log("FUAd");
    </script>

</body>

</html>
