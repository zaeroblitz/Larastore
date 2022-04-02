@extends('layouts.admin')

@section('title')
Admin - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h3>Product</h3>
            <p>List of Products</p>
        </div>
    </div>   
    
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-info">
                        + Tambah Product Baru</a>
                        <div class="table-responsive">
                            <table id="crudTable" class="table table-hover table-borderless scroll-horizontal-vertical w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Produk</th>
                                        <th>Pemilik</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        let dataTable = $('#crudTable').DataTable({
            processing: true,
            ordering: true,
            serverside: true,
            ajax: {
                url: '{!! url()->current() !!}'
            },
            columns: [
                { data: 'id', name:'id'},
                { data: 'name', name:'name'},
                { data: 'user.name', name:'user.name'},
                { data: 'category.name', name:'category.name'},
                { data: 'price', name:'price'},
                { 
                    data: 'action', 
                    name:'action',
                    orderable: false,
                    searchable: false,
                    width: '15%',
                },
            ],
        });
    </script>
@endpush
