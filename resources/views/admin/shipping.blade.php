@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Shipping Details</h1>

                </div>
            </div>
        </div>

        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                <!-- Avatar and content -->
                <div class="d-flex align-items-center flex-shrink-0">

                    <!-- Info -->
                    <div class="ms-2">
                        <h5 class="mb-0">{{ $user->name }}</h5>
                    </div>
                </div>

                <div class="d-flex align-items-center flex-shrink-0">
                    <!-- Email address -->
                    <div class="me-2">
                        <h6 class="mb-2 mb-lg-0"><i class="bi bi-envelope-fill fa-fw me-1"></i>Email : <a href="#"
                                class="fw-normal"> {{ $user->email }}</a></h6>
                    </div>
                </div>
            </div>

            <!-- Card body -->
            <div class="card-body">

                {{-- <div class="d-sm-flex justify-content-between align-items-center px-2 mb-4">
                    <div class="ms-0">
                        <h5 class="mb-0">Shipping details</h5>
                    </div>

                    <div class="ms-0">
                        <h5 class="mb-0">Transaction ID: 1</h5>
                    </div>
                </div> --}}

                <div class="ms-0">
                    <h5 class="mb-4">ID Transaksi : {{ $transaction->id }}</h5>
                </div>



                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-5 g-4">
                        <div class="col">
                            <h6 class="mb-0">ID Shipping</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Detail Alamat</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Resi</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Status Pengiriman</h6>
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
                <div class="row row-cols-xl-5 align-items-lg-center border-bottom g-4 px-2 py-4">

                        <!-- Data item -->


                        <!-- Data item -->
                        <div class="col">

                            <h6 class="mb-0 fw-normal">{{ $shipping->id }}</h6>
                        </div>


                        <div class="col"><a href="/adminalamat" class="btn btn-sm btn-light mb-0">View</a></div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">JD08942137</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <div class="badge bg-success bg-opacity-10 text-success">Berhasil</div>
                            {{-- <div class="badge bg-danger bg-opacity-10 text-danger">Status</div> --}}
                        </div>

                        <div class="col"><a href="/adminreview" class="btn btn-sm btn-info mb-0">Update</a></div>

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
