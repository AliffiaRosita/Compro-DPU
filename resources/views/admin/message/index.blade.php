@extends('admin.partials.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-md-4">
                    <h3 class="card-title">Data Pesan</h3>
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subjek</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nigam</td>
                            <td>aaaa@mail.com</td>
                            <td>Pertanyaan Promo</td>
                            <td>
                                <a href="" class="btn btn-outline-warning"><i class="fas fa-eye"></i></a>

                            </td>
                        </tr>

                    </tbody>
                </table>
        </div>
    </div>
@endsection
