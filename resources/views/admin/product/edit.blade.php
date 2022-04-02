@extends('layouts.admin')

@section('title')
Admin - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h3>Product</h3>
            <p>Add New Product</p>
        </div>
    </div>

    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card col-md-8">
                    <div class="card-body">
                        <form action="{{ route('product.update', $item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Pemilik Produk</label>
                                        <select name="users_id" class="form-control">
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}" {{ ($item->users_id == $user->id) ? 'selected' : '' }}>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Kategori</label>
                                        <select name="categories_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ ($item->categories_id == $category->id) ? 'selected' : ''}}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Harga</label>
                                        <input type="number" name="price" class="form-control" value="{{ $item->price }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Deskripsi</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{!! $item->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-info px-5">Save Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });

    </script>
@endpush
