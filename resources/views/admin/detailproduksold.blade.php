@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
         <!-- Title -->


        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0 me-0">Full Background</h1>
                    <h1 class="h3 mb-2 mb-sm-0 me-0 ms-0">ID Transaksi : 1</h1>

                    <a href="/adminfotoproduksold" class="btn btn-info text-nowrap mb-0"><i class="bi bi-pencil-square fa-fw"></i>
                        Ganti Foto Produk Sold</a>
                </div>
            </div>
        </div>

        <!-- Booking detail START -->
        <div class="row g-4 g-xl-5">


            <!-- Image -->
            <div class="col-xxl-6">
                <h4>Produk Blm Ada Foto</h4>
                <div class="row g-2 g-sm-4">
                    <div class="col-6">
                        <a data-glightbox data-gallery="gallery" href="images/sepatu/sepatu15.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="images/sepatu/sepatu15.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6">
                        <a data-glightbox data-gallery="gallery" href="images/sepatu/sepatu16.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="images/sepatu/sepatu16.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a data-glightbox data-gallery="gallery" href="images/sepatu/sepatu17.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="images/sepatu/sepatu17.jpg" class="rounded-3" alt="">
                                <!-- Full screen button -->
                                <div class="hover-element w-100 h-100">
                                    <i
                                        class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a data-glightbox data-gallery="gallery" href="images/sepatu/sepatu18.jpg">
                            <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                <!-- Image -->
                                <img src="images/sepatu/sepatu18.jpg" class="rounded-3" alt="">
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

            <!-- Content -->
            <div class="col-xxl-6">


                <h4 class="mt-2">Ukuran : <span class="fw-light">40</span></h4>

                <h4>Anime : <span class="fw-light">Jujutsu kasian</span></h4>

                <h4>Karakter : <span class="fw-light">GOBO SATURO</span></h4>

                <h4>Catatan : <span class="fw-light">Minta glow di mata gobo saturo</span></h4>

                {{-- <p class="mt-4 mb-4">Tolerably behavior may admit daughters offending her ask own. Praise effect wishes to
                    change way and any wanted. Lively use looked latter regard had. Does he part last</p> --}}

                <!-- Feature -->
                <div class="row g-4 mb-4 mt-2">
                    <div class="col-sm-6 col-md-4">
                        <div class="d-flex align-items-center">
                            <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                                    class="fa-solid fa-plus"></i></div>
                            <div class="ms-2">
                                <small>Glow</small>
                                <h6 class="mb-0 mt-1">90k</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="d-flex align-items-center">
                            <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                                    class="fa-solid fa-plus"></i></div>
                            <div class="ms-2">
                                <small>Glow</small>
                                <h6 class="mb-0 mt-1">90k</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="d-flex align-items-center">
                            <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                                    class="fa-solid fa-plus"></i></div>
                            <div class="ms-2">
                                <small>Glow</small>
                                <h6 class="mb-0 mt-1">90k</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <h4><span class="fw-light">Harga : </span>Rp 00,-</h4>


            </div>
        </div>
        <!-- Booking detail END -->



    </div>
    <!-- Page main content END -->
    </div>
    <!-- Page content END -->

    </div>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor -->
    <script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
