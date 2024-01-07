@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">User List</h1>

                </div>
            </div>
        </div>

        <!-- Filters START -->
        <div class="row g-4 align-items-center">
            <!-- Tabs -->
            <div class="col-lg-6">
                <ul class="nav nav-pills-shadow nav-responsive">
                    <li class="nav-item">
                        <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1">All User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3">User</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Filters END -->

        <!-- Guest list START -->
        <div class="card shadow mt-5">
            <!-- Card body START -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-6 g-4">
                        <div class="col">
                            <h6 class="mb-0">ID</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Nama</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Role</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Review</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Transaksi</h6>
                        </div>
                    </div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-6 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->

                    <div class="col">
                        <h6 class="mb-0 fw-normal">1</h6>
                    </div>

                    <div class="col">

                        <h6 class="mb-0 fw-normal">Willy Cahyadi</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">willycahyadi25@gmail.com</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">User</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="/adminreview" class="btn btn-sm btn-light mb-0">View</a></div>



                    <!-- Data item -->
                    <div class="col"><a href="/admintransaction" class="btn btn-sm btn-light mb-0">View</a></div>
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

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
