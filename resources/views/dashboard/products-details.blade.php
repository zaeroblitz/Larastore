@extends('layouts.dashboard')

@section('title')
Dashboard Product Detail - Larastore
@endsection

@section('content')
<div class="container-fluid py-4 dashboard-settings">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>Nike Air Max</h2>
            <p>Product Details</p>
        </div>
    </div>

    <form action="">
        <div class="card col-12 px-4 pb-4">
            <section class="section-shipping" data-aos="fade-up" data-aos-delay="100" style="margin-top: 0px">
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control"
                                placeholder="Input Your Product Name" value="Nike Air Max" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_price">Price ($)</label>
                            <input type="number" name="product_price" id="product_price" class="form-control"
                                placeholder="Input Your Product Price" value="1000" />
                        </div>
                    </div>
                </div>
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control" style="padding: 0px">
                                <option value="Sneakers">Sneakers</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Foods">Foods</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="4" class="form-control">The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning </textarea>
                        </div>
                    </div>
                </div>
            </section>

            <a href="" class="mt-4 col-12 btn btn-info">Update Product</a>
        </div>
    </form>

    <div class="card dashboard-update-product p-4 mt-4">
        <div class="row">
            <div class="col-md-4 col-6 mb-4">
                <img src="/images/detail_product_1.png" alt="product" class="w-100" />
                <a href="#" class="icon-remove rounded-circle">
                    <img src="/images/icon_remove.svg" alt="icon_remove" />
                </a>
            </div>
            <div class="col-md-4 col-6 mb-4">
                <img src="/images/product_2.png" alt="product" class="w-100" />
                <a href="#" class="icon-remove rounded-circle">
                    <img src="/images/icon_remove.svg" alt="icon_remove" />
                </a>
            </div>
            <div class="col-md-4 col-6 mb-4">
                <img src="/images/product_3.png" alt="product" class="w-100" />
                <a href="#" class="icon-remove rounded-circle">
                    <img src="/images/icon_remove.svg" alt="icon_remove" />
                </a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <input type="file" name="upload_images" id="upload_images" style="display: none" multiple />
                <button class="btn btn-dark d-block w-100" onclick="thisFileUpload()">
                    Add Photos
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        function thisFileUpload() {
            document.getElementById("upload_images").click();
        }
    </script>
@endpush
