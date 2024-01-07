@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">List Extra</h1>
                    {{-- <a href="#" class="btn btn-md btn-success mb-0">Add Extra</a> --}}
                </div>
            </div>
        </div>
        <!-- Filters END -->

        <!-- Guest list START -->
        <div class="card shadow mt-0">
            <!-- Card body START -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-6 g-4">
                        <div class="col">
                            <h6 class="mb-0">ID Extra</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Nama</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Deskripsi</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Harga</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Images</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Action</h6>
                        </div>
                    </div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-6 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->

                    <div class="col">
                        <h6 class="mb-0 fw-normal">1</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">Glow</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">Deskripsi</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">90k</h6>
                    </div>

                    <!-- Image and content -->
                    <div class="col-md-4">
                        <!-- Image -->
                        <div class="position-relative">
                            <img src="images/sepatu/sepatu4.jpg" class="card-img" alt="">
                            <!-- Badge -->
                            <div class="card-img-overlay">
                                <a href="images/sepatu/sepatu4.jpg"
                                    class="badge bg-dark stretched-link" data-glightbox=""
                                    data-gallery="gallery3">
                                    4 Photos <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                            <!-- Popup Images -->
                            <a data-glightbox="" data-gallery="gallery3"
                                href="images/sepatu/sepatu4.jpg" class="stretched-link z-index-9"></a>
                            <a data-glightbox="" data-gallery="gallery3"
                                href="images/sepatu/sepatu4.jpg"></a>
                            <a data-glightbox="" data-gallery="gallery3"
                                href="images/sepatu/sepatu4.jpg"></a>
                        </div>
                    </div>

                    <div class="col"><a href="/adminfotoextra" class="btn btn-sm btn-info mb-0">Ganti Gambar</a></div>
                </div>
            </div>
            <!-- Card body END -->

        </div>
        <!-- Guest list END -->
    </div>
    <!-- Page main content END -->

    </div>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor -->
    <script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/sticky-js/sticky.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
