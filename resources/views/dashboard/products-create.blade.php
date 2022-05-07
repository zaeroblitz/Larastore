@extends('layouts.dashboard')

@section('title')
Dashboard Product Create - Larastore
@endsection

@section('content')
<div class="container-fluid py-4 dashboard-settings">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>Add New Product</h2>
            <p>Create your own product</p>
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
    <form action="{{ route('dashboard-products-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
        <div class="card col-12 px-4 pb-4">
            <section class="section-shipping" data-aos="fade-up" data-aos-delay="100" style="margin-top: 0px">
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Input Product Name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Price ($)</label>
                            <input type="number" name="price" id="price" class="form-control"
                                placeholder="Input Product Price" />
                        </div>
                    </div>
                </div>
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="categories_id">Category</label>
                            <select name="categories_id" id="categories_id" class="form-control" style="padding: 0px;">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="4"
                                class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="photo">Product Images</label>
                            <input type="file" name="photo" id="photo" class="form-control" multiple>
                        </div>
                    </div>
                </div>
            </section>

            <button type="submit" class="mt-4 col-12 btn btn-info">Create Product</button>
        </div>
    </form>
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