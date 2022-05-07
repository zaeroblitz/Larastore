@extends('layouts.dashboard')

@section('title')
Dashboard Product Detail - Larastore
@endsection

@section('content')
<div class="container-fluid py-4 dashboard-settings">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>{{ $product->name }}</h2>
            <p>Product Details</p>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('dashboard-products-update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
        <div class="card col-12 px-4 pb-4">
            <section class="section-shipping" data-aos="fade-up" data-aos-delay="100" style="margin-top: 0px">
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Input Your Product Name" value="{{ $product->name }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Price ($)</label>
                            <input type="number" name="price" id="price" class="form-control"
                                placeholder="Input Your Product Price" value="{{ $product->price }}" />
                        </div>
                    </div>
                </div>
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="categories_id">Category</label>
                            <select name="categories_id" id="categories_id" class="form-control" style="padding: 0px">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->categories_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="4" class="form-control">{!! $product->description !!}</textarea>
                        </div>
                    </div>
                </div>
            </section>

            <button type="submit" class="mt-4 col-12 btn btn-info">Update Product</button>
        </div>
    </form>

    <div class="card dashboard-update-product p-4 mt-4">
        <div class="row">
            @foreach ($product->galleries as $gallery)
                <div class="col-md-4 col-6 mb-4">
                    <img src="{{ Storage::url($gallery->photo) ?? '' }}" alt="product" class="w-100" />
                    <a href="{{ route('dashboard-products-photo-delete', $gallery->id) }}" class="icon-remove rounded-circle">
                        <img src="/images/icon_remove.svg" alt="icon_remove" />
                    </a>
                </div>
            @endforeach
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <form action="{{ route('dashboard-products-photo-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="products_id" value="{{ $product->id }}">
                    <input type="file" name="photo" id="photo" style="display: none" onchange="form.submit()" />
                    <button type="button" class="btn btn-dark d-block w-100" onclick="thisFileUpload()">
                        Add Photos
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        function thisFileUpload() {
            document.getElementById("photo").click();
        }
    </script>

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
@endpush
