@extends('layout.template')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <!-- =======================
Main Banner START -->
<section class="pt-4">
	<div class="container">
    <main>
        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="fs-3">Tipe Sepatu</h1>
                <!-- Location -->
                <p class="fw-bold mb-0">Nama Karakter - Anime</p>
            </div>
        </div>

        <!-- Slider START -->
        <div class="tiny-slider arrow-round arrow-blur">
            <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="0" data-dots="false"
                data-items="2" data-items-sm="1">
                <!-- Slider item -->
                <div>
                    <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="images/sepatu/sepatu1.jpg">
                        <div class="card card-element-hover card-overlay-hover overflow-hidden">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu1.jpg" class="rounded-3" alt="">
                            <!-- Full screen button -->
                            <div class="hover-element w-100 h-100">
                                <i
                                    class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Slider item -->
                <div>
                    <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="images/sepatu/sepatu1.jpg">
                        <div class="card card-element-hover card-overlay-hover overflow-hidden">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu1.jpg" class="rounded-3" alt="">
                            <!-- Full screen button -->
                            <div class="hover-element w-100 h-100">
                                <i
                                    class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Slider item -->
                <div>
                    <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="images/sepatu/sepatu1.jpg">
                        <div class="card card-element-hover card-overlay-hover overflow-hidden">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu1.jpg" class="rounded-3" alt="">
                            <!-- Full screen button -->
                            <div class="hover-element w-100 h-100">
                                <i
                                    class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Slider item -->
                <div>
                    <a class="w-100 h-100" data-glightbox data-gallery="gallery" href="images/sepatu/sepatu1.jpg">
                        <div class="card card-element-hover card-overlay-hover overflow-hidden">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu1.jpg" class="rounded-3" alt="">
                            <!-- Full screen button -->
                            <div class="hover-element w-100 h-100">
                                <i
                                    class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Slider START -->
        </div>
        </section>
        <!-- =======================
    Main Banner END -->

        <!-- =======================
    Room detail START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">

                    <!-- Detail START -->
                    <div class="col-xl-7">
                        <div class="card bg-transparent p-0">
                            <!-- Card header -->
                            <div
                                class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3">
                                <h4 class="mb-2 mb-sm-0">Select Extra</h4>


                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-0 pt-3">
                                <div class="vstack gap-5">
                                    <!-- Room item START -->
                                    <div class="card border bg-transparent p-3">
                                        <div class="row g-3 g-md-4">
                                            <!-- Image and content -->
                                            <div class="col-md-4">
                                                <!-- Image -->
                                                <div class="position-relative">
                                                    <img src="images/sepatu/sepatu32.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Badge -->
                                                    <div class="card-img-overlay">
                                                        <a href="images/sepatu/sepatu32.jpg"
                                                            class="badge bg-dark stretched-link" data-glightbox=""
                                                            data-gallery="gallery">
                                                            5 Photos <i class="bi bi-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <!-- Popup Images -->
                                                    <a data-glightbox="" data-gallery="gallery"
                                                        href="images/sepatu/sepatu32.jpg"
                                                        class="stretched-link z-index-9"></a>
                                                    <a data-glightbox="" data-gallery="gallery"
                                                        href="images/sepatu/sepatu32.jpg"></a>
                                                    <a data-glightbox="" data-gallery="gallery"
                                                        href="images/sepatu/sepatu32.jpg"></a>
                                                </div>
                                            </div>

                                            <!-- Room detail START -->
                                            <div class="col-md-8">
                                                <div class="card-body d-flex flex-column p-0 h-100">
                                                    <!-- Title -->
                                                    <h5 class="card-title">Glow</h5>

                                                    <!-- List -->
                                                    <ul class="nav small nav-divider mb-0">
                                                        <li class="nav-item mb-0">
                                                           Glow Hijau
                                                        </li>
                                                        <li class="nav-item mb-0">
                                                            Glow Biru
                                                        </li>
                                                        <li class="nav-item mb-0">
                                                            Glow Tosca
                                                        </li>
                                                    </ul>

                                                    <!-- Price and button -->
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
                                                        <div class="d-flex text-success">
                                                            <h6 class="h5 mb-0 text-success">$385</h6>
                                                            <span class="fw-light">/per night</span>
                                                        </div>
                                                        <a href="#" class="btn btn-sm btn-dark mb-0">Select room</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Room detail START -->
                                        </div>
                                    </div>
                                    <!-- Room item END -->

                                    <!-- Room item START -->
                                    <div class="card border bg-transparent p-3">
                                        <div class="row g-3 g-md-4">
                                            <!-- Image and content -->
                                            <div class="col-md-4">
                                                <!-- Image -->
                                                <div class="position-relative">
                                                    <img src="assets/images/category/hotel/4by3/10.jpg" class="card-img"
                                                        alt="">
                                                    <!-- Badge -->
                                                    <div class="card-img-overlay">
                                                        <a href="assets/images/gallery/13.jpg"
                                                            class="badge bg-dark stretched-link" data-glightbox=""
                                                            data-gallery="gallery">
                                                            4 Photos <i class="bi bi-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <!-- Popup Images -->
                                                    <a data-glightbox="" data-gallery="gallery"
                                                        href="assets/images/gallery/11.jpg"
                                                        class="stretched-link z-index-9"></a>
                                                    <a data-glightbox="" data-gallery="gallery"
                                                        href="assets/images/gallery/15.jpg"></a>
                                                    <a data-glightbox="" data-gallery="gallery"
                                                        href="assets/images/gallery/16.jpg"></a>
                                                </div>
                                            </div>

                                            <!-- Room detail START -->
                                            <div class="col-md-8">
                                                <div class="card-body d-flex flex-column h-100 p-0">
                                                    <!-- Title -->
                                                    <h5 class="card-title">Deluxe Room</h5>

                                                    <!-- List -->
                                                    <ul class="nav small nav-divider mb-0">
                                                        <li class="nav-item mb-0">
                                                            <i class="fa-regular fa-square me-1"></i>458 sq.ft
                                                        </li>
                                                        <li class="nav-item mb-0">
                                                            <i class="fa-solid fa-table-cells-large me-1"></i>City view
                                                        </li>
                                                        <li class="nav-item mb-0">
                                                            <i class="fa-solid fa-bed me-1"></i>King Bed
                                                        </li>
                                                    </ul>

                                                    <!-- Price and button -->
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
                                                        <div class="d-flex text-success">
                                                            <h6 class="h5 mb-0 text-success">$485</h6>
                                                            <span class="fw-light">/per night</span>
                                                        </div>
                                                        <a href="#" class="btn btn-sm btn-dark mb-0">Select room</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Room detail START -->
                                        </div>
                                    </div>
                                    <!-- Room item END -->
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Detail END -->

                    <!-- Right side content START -->
                    <aside class="col-xl-5 d-none d-xl-block">
                        <div class="card bg-transparent border">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <!-- Title -->
                                <h4 class="card-title mb-0">Price Summary</h4>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">

                                <div class="row g-4 mb-3">
                                    <!-- Item -->
                                    <div class="col-md-6">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Check-in</h6>
                                            <h6 class="mb-0">4 March 2022</h6>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="col-md-6">
                                        <div class="bg-light py-3 px-4 rounded-3">
                                            <h6 class="fw-light small mb-1">Check out</h6>
                                            <h6 class="mb-0">8 March 2022</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- List -->
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item px-2 d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0">$6,100 x 2 Nights</span>
                                        <span class="h6 fw-light mb-0">$13,200</span>
                                    </li>
                                    <li class="list-group-item px-2 d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0">10% campaign discount</span>
                                        <span class="h6 fw-light mb-0">-$500</span>
                                    </li>
                                    <li class="list-group-item px-2 d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0">Services Fee</span>
                                        <span class="h6 fw-light mb-0">$100</span>
                                    </li>
                                    <li
                                        class="list-group-item bg-light d-flex justify-content-between rounded-2 px-2 mt-2">
                                        <span class="h5 fw-normal mb-0 ps-1">Total</span>
                                        <span class="h5 fw-normal mb-0">$13,500</span>
                                    </li>
                                </ul>

                                <!-- Button -->
                                <div class="d-grid gap-2">
                                    <a href="hotel-booking.html" class="btn btn-dark mb-0">Continue To Book</a>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </aside>
                    <!-- Right side content END -->
                </div>
            </div>
        </section>
        <!-- =======================
    Room detail END -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/sticky-js/sticky.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
