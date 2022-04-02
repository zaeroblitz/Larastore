@extends('layouts.admin')

@section('title')
Admin - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h3>Product Gallery</h3>
            <p>List of Galleries</p>
        </div>
    </div>   
    
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product-gallery.create') }}" class="btn btn-info">
                        + Tambah Gallery Produk Baru</a>
                        <div class="table-responsive">
                            <table id="crudTable" class="table table-hover table-borderless scroll-horizontal-vertical w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Produk</th>
                                        <th>Photo</th>
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
                { data: 'product.name', name:'product.name'},
                { data: 'photo', name:'photo'},
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
