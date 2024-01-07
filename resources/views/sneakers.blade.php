@extends('layout.template')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                                Near by START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Cari Sepatu Berdasarkan Tipe</h2>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu32.jpg" class="rounded-circle" alt="">

                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="#" class="stretched-link">Just Logo</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu35.jpg" class="rounded-circle" alt="">

                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="#" class="stretched-link">No Background</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu1.jpg" class="rounded-circle" alt="">

                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="#" class="stretched-link">Half Background</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="images/sepatu/sepatu4.jpg" class="rounded-circle" alt="">

                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="#" class="stretched-link">Full Background</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
                                                            Near by END -->


        <!-- =======================
                    Title and Tabs START -->
        <section class="pt-0 pb-4">
            <div class="container position-relative">

                <!-- Title and button START -->
                <div class="row">
                    <div class="col-12">
                        <!-- Meta START -->
                        <div class="d-flex justify-content-between">
                            <!-- tabs -->
                            <ul class="nav nav-pills nav-pills-dark" id="tour-pills-tab" role="tablist">

                                <!-- Tab item -->
                                <li class="nav-item">
                                    <div class="nav-link rounded-1 mb-0 active"><i class="bi fa-fw bi-grid-fill"></i></div>
                                </li>
                            </ul>
                        </div>
                        <!-- Meta END -->
                    </div>
                </div>
                <!-- Title and button END -->
            </div>
        </section>
        <!-- =======================
                    Title and Tabs END -->

        <!-- =======================
                    Hotel grid START -->
        <section class="pt-0">
            <div class="container">
                <div class="row g-4">

                    @foreach ($soldProducts as $soldProduct)
                        <div class="col-md-6 col-xl-4">
                            <div class="card shadow p-2 pb-0 h-80">
                                <div class="card-body px-3 pb-0">
                                    <h5 class="card-title"><a href="#">{{ $soldProduct->product->name }}</a></h5>

                                    <ul class="nav nav-divider mb-2 mb-sm-3">
                                        @foreach ($soldProduct->product->extras as $extra)
                                            <li class="nav-item">{{ $extra->extra_name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer pt-0">
                                    <div class="d-flex align-items-center">
                                        {{ $soldProduct->product->price }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow p-2 pb-0 h-80">
                            <!-- Overlay item -->
                            {{-- <div class="position-absolute top-0 start-0 z-index-1 m-4">
                                <div class="badge bg-danger text-white">30% Off</div>
                            </div> --}}

                            <!-- Slider START -->
                            <div class="tiny-slider arrow-round arrow-xs arrow-dark rounded-2 overflow-hidden">
                                <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false"
                                    data-items="1">
                                    <!-- Image item -->
                                    <div><img src="images/sepatu/sepatu3.jpg" alt="Card image"></div>

                                    <!-- Image item -->
                                    <div><img src="images/sepatu/sepatu3.jpg" alt="Card image"></div>

                                    <!-- Image item -->
                                    <div><img src="images/sepatu/sepatu3.jpg" alt="Card image"></div>

                                    <!-- Image item -->
                                    <div><img src="images/sepatu/sepatu3.jpg" alt="Card image"></div>
                                </div>
                            </div>
                            <!-- Slider END -->

                            <!-- Card body START -->
                            <div class="card-body px-3 pb-0">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Karakter Name</a></h5>

                                <!-- List -->
                                <ul class="nav nav-divider mb-2 mb-sm-3">
                                    <li class="nav-item">Tipe Sepatu</li>
                                    <li class="nav-item">Extra 1</li>
                                    <li class="nav-item">Extra 2</li>
                                    <li class="nav-item">Extra 3</li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <!-- Price -->
                                    <div class="d-flex align-items-center">

                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="/detail" class="btn btn-sm btn-primary-soft mb-0 w-100">Order Sekarang<i
                                                class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                </div> <!-- Row END -->

                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                            class="fa-solid fa-angle-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                            class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                    Hotel grid END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"></div>
    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/nouislider/nouislider.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
