@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <!-- Title -->


        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0 me-0 ms-0">ID Transaksi : {{ $transaction->id }}</h1>

                    <a href="{{ route('adminfototransaksiedit', $transaction) }}" class="btn btn-info text-nowrap mb-0"><i
                            class="bi bi-pencil-square fa-fw"></i>
                        Ganti Foto Produk Sold</a>
                </div>
            </div>
        </div>

        <!-- Booking detail START -->
        <div class="row g-4 g-xl-5">


            <!-- Image -->
            <div class="col-xxl-6">
                {{-- <h4>Produk Blm Ada Foto</h4> --}}
                <div class="row g-2 g-sm-4">
                    @foreach ($images as $image)
                        <div class="col-6">
                            <a data-glightbox data-gallery="gallery" href="{{ asset('storage/' . $image->image_path) }}">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="rounded-3"
                                        alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Content -->
            <div class="col-xxl-6">

                <h4 class="mt-2">Tipe Produk : <span class="fw-light">{{ $transaction->product->name }}</span></h4>

                <h4>Ukuran : <span class="fw-light">{{ $transaction->size }}</span></h4>

                <h4>Anime : <span class="fw-light">{{ $transaction->anime }}</span></h4>

                <h4>Karakter : <span class="fw-light">{{ $transaction->character }}</span></h4>

                <h4>Catatan : <span class="fw-light">{{ $transaction->note }}</span></h4>

                {{-- <p class="mt-4 mb-4">Tolerably behavior may admit daughters offending her ask own. Praise effect wishes to
                    change way and any wanted. Lively use looked latter regard had. Does he part last</p> --}}

                <!-- Feature -->
                <div class="row g-4 mb-4 mt-2">

                    @foreach ($transaction->extras as $extra)
                        <div class="col-sm-6 col-md-4">
                            <div class="d-flex align-items-center">
                                <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                                        class="fa-solid fa-plus"></i></div>
                                <div class="ms-2">
                                    <h5 class="text-primary">{{ $extra->name }}</h5>
                                    <h6 class="mb-0 mt-1">Rp. {{ number_format($extra->price, 0, ',', '.') }}.-</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h4><span class="fw-light">Total Harga : </span>Rp. {{ number_format($transaction->total_price, 0, ',', '.') }}.-</h4>


            </div>
        </div>
        <!-- Booking detail END -->



    </div>
    <!-- Page main content END -->
    </div>
    <!-- Page content END -->

    </div>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
@endsection
