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
            </div>
        </section>

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
