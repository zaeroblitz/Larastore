@extends('layouts.app')

@section('title')
Larastore - Your Best Marketplace
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <section class="section-carousel" data-aos="zoom-in">
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner.png" class="d-block w-100" alt="..." />
                    </div>
                </div>
            </div>
        </section>

        <section class="section-categories">
            <h4 class="component-header">Trend Categories</h4>
            <div class="row">
                @php
                    $categoryDelay = 0;
                @endphp
                @forelse ($categories as $category)
                    <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="{{ $categoryDelay += 50 }}">
                    <div class="categories-item">
                        <a href="{{ route('categories-detail', $category->slug) }}">
                            <div class="col">
                                <div class="category-item-icon mx-auto">
                                    <img src="{{ Storage::url($category->icon) }}" alt="{{ $category->name }}" />
                                </div>
                                <div class="category-item-caption">
                                    <p>{{ $category->name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                    <div class="col-12 px-5 text-center" data-aos="fade-up" data-aos-delay="50">
                        <p>Categories Not Found</p>
                    </div>
                @endforelse
            </div>
        </section>

        <section class="section-new-products">
            <h4 class="component-header">New Products</h4>
            <div class="row">
                @php
                    $delayProduct = 0;
                @endphp
                @forelse ($products as $product)
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="{{ $delayProduct += 100 }}">
                    <a href="{{ route('detail', $product -> slug) }}" class="categories-item">
                        <div class="col">
                            <div class="new-product-image">
                                <img src="{{ ($product -> galleries) ? Storage::url($product->galleries->first()->photo) : '/images/product_default.png'}}" alt="product" />
                            </div>
                            <div class="new-product-caption">
                                <p class="new-product-name mb-0">{{ $product -> name }}</p>
                                <p class="new-product-price">$ {{ number_format($product -> price) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @empty                    
                    <div class="col-12 px-5 text-center" data-aos="fade-up" data-aos-delay="50">
                        <p>Products Not Found</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
</div>
@endsection
