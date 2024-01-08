@extends('layout.template')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                        Page Banner START -->
        <section class="py-0">
            <div class="container">
                <div class="row mt-4 align-items-center">
                    <div class="col-12">
                        <!-- Card START -->
                        <div class="card bg-light overflow-hidden px-sm-5">
                            <div class="row align-items-center g-4">

                                <!-- Content -->
                                <div class="col-sm-9">
                                    <div class="card-body">
                                        <!-- Breadcrumb -->
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb breadcrumb-dots mb-0">
                                                <li class="breadcrumb-item"><a href="index.html"><i
                                                            class="bi bi-house me-1"></i> Home</a></li>
                                                <li class="breadcrumb-item">Pesanan Saya</li>
                                            </ol>
                                        </nav>
                                        <!-- Title -->
                                        <h1 class="m-0 h2 card-title">Pesanan Saya</h1>
                                    </div>
                                </div>


                                <!-- Image -->
                                <div class="col-sm-3 text-end d-none d-sm-block">
                                    <img src="assets/images/element/17.svg" class="mb-n4" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                                        Page Banner END -->
        <section>
            <div class="container">
                <h1 class="m-0 h2 card-title text-center">Tidak ada pesanan</h1>
                <div class="mt-2 d-flex align-items-center justify-content-center">
                    <a href="/sneakers" class="btn btn-primary">Silahkan Order</a>
                </div>

                <div class="row g-4">
                    <div class="col-xl-9 mx-auto">
                        <div class="vstack gap-4">

                            <!-- Booking summary START -->
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom p-4">
                                    <div class="row">
                                        <div class="col-12 mb-0">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                                <h1 class="mb-0 fs-3">Pesanan 1</h1>
                                                {{-- <a href="#" class="btn ms-auto btn-info text-nowrap mb-0 me-2"><i
                                                        class="bi bi-pencil-square fa-fw"></i>
                                                    Edit Produk</a>
                                                <a href="#" class="btn btn-orange text-nowrap mb-0"><i
                                                        class="bi bi-pencil-square fa-fw"></i>
                                                    Edit Extra</a> --}}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-4">
                                    <div class="row g-md-4">
                                        <!-- Image -->
                                        <div class="col-md-3">
                                            <div class="bg-light rounded-3 px-4 py-5 mb-3 mb-md-0">
                                                <img src="assets/images/category/cab/seadan.svg" alt="">
                                            </div>
                                        </div>

                                        <!-- Card and address detail -->
                                        <div class="col-md-9">
                                            <!-- Title -->
                                            <h5 class="card-title mb-2">Camry, Accord</h5>
                                            <ul class="nav nav-divider h6 fw-normal mb-2">
                                                <li class="nav-item">SEDAN</li>
                                                <li class="nav-item">AC</li>
                                                <li class="nav-item">2 Seats</li>
                                            </ul>

                                            <!-- Pick up and drop address -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <small>Pickup address</small>
                                                    <p class="h6 fw-light mb-md-0">8 Central Ave, Chelsea, Maine, United
                                                        States</p>
                                                </div>

                                                <div class="col-md-6">
                                                    <small>Drop address</small>
                                                    <p class="h6 fw-light mb-0">1846 S Oates St, Dothan, Alaska, United
                                                        States</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item">Journey Date:<span
                                                        class="h6 fw-normal mb-0 ms-1">25 Nov 2022</span></li>
                                                <li class="list-group-item">Distance:<span
                                                        class="h6 fw-normal mb-0 ms-1">230 km</span></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item">Passengers:<span
                                                        class="h6 fw-normal mb-0 ms-1">1</span></li>
                                                <li class="list-group-item">Luggages:<span
                                                        class="h6 fw-normal mb-0 ms-1">2</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h6 class="mb-0 mt-3">Passenger Detail</h6>

                                    <div class="row">
                                        <!-- List -->
                                        <div class="col-sm-8">
                                            <ul class="list-group list-group-borderless mb-0">
                                                <li class="list-group-item">Passenger Name:<span
                                                        class="h6 mb-0 fw-normal ms-1">Billy Vasquez</span></li>
                                                <li class="list-group-item">Passenger Email:<span
                                                        class="h6 mb-0 fw-normal ms-1">example@gmail.com</span></li>
                                                <li class="list-group-item">Passenger Number:<span
                                                        class="h6 mb-0 fw-normal ms-1">+222 555 666 85</span></li>
                                            </ul>
                                        </div>

                                        <!-- Price -->
                                        <div class="col-sm-4 text-sm-end mt-3 mt-sm-auto">
                                            <h6 class="mb-1 fw-normal">Total Amount</h6>
                                            <h2 class="mb-0 text-success">$458</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                            <!-- Booking summary END -->


                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
