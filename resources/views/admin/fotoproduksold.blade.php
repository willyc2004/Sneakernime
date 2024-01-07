@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Foto Produk Sold</h1>
                    <a href="#" class="btn btn-md btn-success mb-0">Add Foto Produk Sold</a>
                </div>
            </div>
        </div>

        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                <!-- Avatar and content -->
                <div class="ms-0">
                    <h5 class="mb-0">ID Transaksi : 1</h5>
                </div>
            </div>

            <!-- Card body -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-3 g-4">
                        <div class="col">
                            <h6 class="mb-0">ID Foto Produk Sold</h6>
                        </div>

                        <div class="col">
                            <h6 class="mb-0">Foto</h6>
                        </div>

                        <div class="col">
                            <h6 class="mb-0">Action</h6>
                        </div>
                        {{-- <div class="col">
                            <h6 class="mb-0">Action</h6>
                        </div> --}}
                    </div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-3 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->


                    <!-- Data item -->
                    <div class="col">

                        <h6 class="mb-0 fw-normal">1</h6>
                    </div>

                    <img src="images/sepatu/sepatu1.jpg" alt="">


                    <div class="col"><a href="#" class="btn btn-md btn-danger mb-0">Delete</a></div>

                    {{-- <div class="col"><a href="/adminreview" class="btn btn-sm btn-danger mb-0">Delete</a></div> --}}


                </div>


            </div>
        </div>
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
