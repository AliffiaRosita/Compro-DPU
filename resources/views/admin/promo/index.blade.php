@extends('admin.partials.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-md-4">
                    <h3 class="card-title">Data Promo</h3>
                </div>
                <div class="col-md-8">
                    <a href="" class="btn btn-outline-info float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th>#</th>
                            <th>Judul Promo</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nigam</td>
                            <td><img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80" alt="foto-promo" width="200px" class="img-thumbnail"></td>
                            <td>
                                <a href="" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i></a>
                                <form action="" class="d-inline">
                                    <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
        </div>
    </div>
@endsection
