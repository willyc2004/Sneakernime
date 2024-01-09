@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-0 mb-sm-0">Shipping Details</h1>

                </div>
            </div>
        </div>

        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                <h5 class="mb-0">ID Transaksi : {{ $transaction->id }}</h5>
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

                {{-- <div class="ms-0">

                </div> --}}



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


                    <div class="col"><a href="{{ route('adminalamat', $shipping) }}" class="btn btn-sm btn-light mb-0">View</a></div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">{{ $shipping->resi }}</h6>
                    </div>

                    <!-- Data item -->
                    {{-- <div class="col">
                            <div class="badge bg-success bg-opacity-10 text-success">{{ $shipping->statusShipping->status }}</div>

                        </div> --}}
                    <div class="col">
                        @if ($shipping->statusShipping)
                            <div
                                class="badge
                                    @if ($shipping->statusShipping->id == 3) bg-success text-success
                                    @elseif ($shipping->statusShipping->id == 2) bg-info text-info
                                    @else bg-orange text-orange @endif bg-opacity-10">
                                {{ $shipping->statusShipping->status }}
                            </div>
                        @else
                            <!-- Handle the case where paymentStatus is null -->
                            <div class="badge bg-danger text-danger">Payment status not available</div>
                        @endif
                    </div>


                    <div class="col"><a href="{{ route('adminshippingedit', $transaction) }}" class="btn btn-sm btn-info mb-0">Update</a></div>

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
