@extends('layouts.app')
@section('title')
Detail Product Page
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <section class="section-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Product Details
                        </li>
                    </ol>
                </nav>
            </section>

            <section class="section-gallery" id="gallery">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-12 col-lg-9" data-aos="zoom-in">
                            <transition name="slide-fade" mode="out-in">
                                <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image"
                                    alt="" />
                            </transition>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id"
                                    data-aos="zoom-in" data-aos-delay="100">
                                    <a href="#" @click="changeActive(index)">
                                        <img :src="photo.url" class="thumbnail-image"
                                            :class="{ active: index == activePhoto }" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="section-description mb-4" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-md-9 section-description-group">
                        <h4 class="product-name col-12">Sofa Ternyaman</h4>
                        <p class="product-seller col-12">By Galih Pratama</p>
                        <p class="product-price col-12">$1,409</p>
                        <p class="product-description col-12 col-lg-10">
                            The Nike Air Max 720 SE goes bigger than ever before with Nike's
                            tallest Air unit yet for unimaginable, all-day comfort. There's
                            super breathable fabrics on the upper, while colours add a
                            modern edge. <br />Bring the past into the future with the Nike
                            Air Max 2090, a bold look inspired by the DNA of the iconic Air
                            Max 90. Brand-new Nike Air cushioning underfoot adds
                            unparalleled comfort while transparent mesh and vibrantly
                            coloured details on the upper are blended with timeless OG
                            features for an edgy, modernised look.
                        </p>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2 mb-4">
                        <a href="{{ route('cart') }}" class="btn btn-success d-block">Add to Cart</a>
                    </div>
                </div>
            </div>

            <section class="section-user-reviews mt-2" data-aos="fade-up">
                <h4 class="component-header">Customer Reviews (3)</h4>
                <div class="user-review-item">
                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="/images/user_1.png" alt="user" class="user-review-avatar w-100 rounded-circle" />
                        </div>
                        <div class="col-9 col-lg-6 user-review-group">
                            <div class="col-12">
                                <p class="user-review-name">Hazza Rizky</p>
                            </div>
                            <div class="col-12">
                                <p class="user-review">
                                    I thought it was not good for living room. I really happy to
                                    decided buy this product last week now feels like homey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-review-item">
                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="/images/user_pc.png" alt="user" class="user-review-avatar w-100 rounded-circle" />
                        </div>
                        <div class="col-9 col-lg-6 user-review-group">
                            <div class="col-12">
                                <p class="user-review-name">Anna Sukkirata</p>
                            </div>
                            <div class="col-12">
                                <p class="user-review">
                                    Color is great with the minimalist concept. Even I thought
                                    it was made by Cactus industry. I do really satisfied with
                                    this.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-review-item">
                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <img src="/images/user_2.png" alt="user" class="user-review-avatar w-100 rounded-circle" />
                        </div>
                        <div class="col-9 col-lg-6 user-review-group">
                            <div class="col-12">
                                <p class="user-review-name">Sefi Raiado</p>
                            </div>
                            <div class="col-12">
                                <p class="user-review">
                                    When I saw at first, it was really awesome to have with.
                                    Just let me know if there is another upcoming product like
                                    this.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        let gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [
                    {
                        id: 1,
                        url: "/images/detail_product_1.png",
                    },
                    {
                        id: 2,
                        url: "/images/detail_product_2.png",
                    },
                    {
                        id: 3,
                        url: "/images/detail_product_3.png",
                    },
                    {
                        id: 4,
                        url: "/images/detail_product_4.png",
                    },
                ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });

    </script>
    <script src="/scripts/navbar-scroll.js"></script>
@endpush
