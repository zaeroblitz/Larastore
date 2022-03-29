@extends('layouts.app')

@section('title')
Larastore - Category
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <section class="section-categories">
                <h4 class="component-header">Trend Categories</h4>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                        <div class="categories-item">
                            <a href="#">
                                <div class="col">
                                    <div class="category-item-icon mx-auto">
                                        <img src="images/icon_gadgets.svg" alt="Gadgets" />
                                    </div>
                                    <div class="category-item-caption">
                                        <p>Gadgets</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="categories-item">
                            <a href="#">
                                <div class="col">
                                    <div class="category-item-icon mx-auto">
                                        <img src="images/icon_furniture.svg" alt="Furniture" />
                                    </div>
                                    <div class="category-item-caption">
                                        <p>Furniture</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="categories-item">
                            <a href="#">
                                <div class="col">
                                    <div class="category-item-icon mx-auto">
                                        <img src="images/icon_make_up.svg" alt="Make Up" />
                                    </div>
                                    <div class="category-item-caption">
                                        <p>Make Up</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="categories-item">
                            <a href="#">
                                <div class="col">
                                    <div class="category-item-icon mx-auto">
                                        <img src="images/icon_sneaker.svg" alt="Sneaker" />
                                    </div>
                                    <div class="category-item-caption">
                                        <p>Sneaker</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="categories-item">
                            <a href="#">
                                <div class="col">
                                    <div class="category-item-icon mx-auto">
                                        <img src="images/icon_tools.svg" alt="Tools" />
                                    </div>
                                    <div class="category-item-caption">
                                        <p>Tools</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="categories-item">
                            <a href="#">
                                <div class="col">
                                    <div class="category-item-icon mx-auto">
                                        <img src="images/icon_baby.svg" alt="Baby" />
                                    </div>
                                    <div class="category-item-caption">
                                        <p>Baby</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-new-products">
                <h4 class="component-header">All Products</h4>
                <div class="row">
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up">
                        <a href="#">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_1.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Apple Watch 4</p>
                                    <p class="new-product-price">$890</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="#">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_2.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Orange Bogotta</p>
                                    <p class="new-product-price">$94,509</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="150">
                        <a href="detail_product.html">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_3.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Sofa Ternyaman</p>
                                    <p class="new-product-price">$1,409</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="200">
                        <a href="#">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_4.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Bubuk Maketti</p>
                                    <p class="new-product-price">$225</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="250">
                        <a href="#">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_5.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Tatakan Gelas</p>
                                    <p class="new-product-price">$10</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="300">
                        <a href="#">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_6.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Mavic Kawe</p>
                                    <p class="new-product-price">$503</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="350">
                        <a href="#">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_7.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Black Edition Nike</p>
                                    <p class="new-product-price">$1,403</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-products-item col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="400">
                        <a href="#">
                            <div class="col">
                                <div class="new-product-image">
                                    <img src="images/product_8.png" alt="product" />
                                </div>
                                <div class="new-product-caption">
                                    <p class="new-product-name mb-0">Monkey Toys</p>
                                    <p class="new-product-price">$783</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
