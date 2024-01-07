@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">List Extra</h1>
                    <a href="#" class="btn btn-md btn-success mb-0">Add Extra</a>
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

                    <img src="images/sepatu/sepatu1.jpg" alt="">

                    <div class="col"><a href="#" class="btn btn-md btn-danger mb-0">Delete</a></div>
                </div>
            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer pt-0">
                <!-- Pagination and content -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Card footer END -->
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
