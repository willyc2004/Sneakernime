@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Review List</h1>

                </div>
            </div>
        </div>
        <!-- Filters END -->

        <!-- Guest list START -->
        <div class="card shadow mt-0">

            <!-- Card header -->
				<div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
					<!-- Avatar and content -->
					<div class="d-flex align-items-center flex-shrink-0">

						<!-- Info -->
						<div class="ms-3">
							<h5 class="mb-0">Lori Stevens</h5>
						</div>
					</div>

					<div class="d-block d-lg-flex gap-lg-5 flex-wrap mt-3 mt-lg-0">
						<!-- Email address -->
						<h6 class="mb-2 mb-lg-0"><i class="bi bi-envelope-fill fa-fw me-1"></i>Email id:<a href="#" class="fw-normal"> hello@gmail.com</a></h6>
					</div>
				</div>

            <!-- Card body START -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-5 g-4">

                        <div class="col">
                            <h6 class="mb-0">Tanggal Review</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Rating</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Komentar</h6>
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
                <div class="row row-cols-xl-5 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">

                        <div class="d-flex align-items-center">
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">19-1-2023</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">5</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">Bagus Banget</h6>
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

                    <div class="col">
                        {{-- <div class="badge bg-success bg-opacity-10 text-success">Payment Status</div> --}}
                        <a href="" class="btn btn-primary">Delete</a>
                    </div>
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
