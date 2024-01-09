@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Detail Alamat</h1>

                </div>
            </div>
        </div>

        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                <!-- Avatar and content -->
                <div class="d-flex align-items-center flex-shrink-0">

                    <!-- Info -->
                    <div class="ms-0">
                        <h5 class="mb-0">ID Shipping : {{ $shipping->id }}</h5>
                    </div>
                </div>


            </div>

            <!-- Card body -->
            <div class="card-body">

                {{-- <div class="d-sm-flex justify-content-between align-items-center px-2 mb-4">
                    <div class="ms-0">
                        <h5 class="mb-0">Detail Alamat</h5>
                    </div>

                    <div class="ms-0">
                        <h5 class="mb-0">Transaction ID: 1</h5>
                    </div>
                </div> --}}




                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-4 g-4">

                        <div class="col">
                            <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">No Telp</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Alamat Lengkap</h6>
                        </div>

                        <div class="col">
                            <h6 class="mb-0">Kode Pos</h6>
                        </div>
                    </div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-4 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->




                    <div class="col">
                        <h6 class="mb-0">{{ $shipping->full_name }}</h6>
                    </div>
                    <div class="col">
                        <h6 class="mb-0">{{ $shipping->phone_number }}</h6>
                    </div>
                    <div class="col">
                        <h6 class="mb-0">{{ $shipping->address }}</h6>
                    </div>

                    <div class="col">
                        <h6 class="mb-0">{{ $shipping->post_code }}</h6>
                    </div>







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
