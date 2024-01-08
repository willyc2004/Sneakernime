@extends('layout.template')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================                                  Near by START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Cari Sepatu Berdasarkan Tipe</h2>
                    </div>
                </div>


                <div class="row g-4 justify-content-center">
                    @foreach ($products as $product)
                        <!-- Card item START -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                            <div class="card bg-transparent text-center p-1 h-100">
                                <!-- Image -->
                                @if ($product->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                                        class="rounded-circle" alt="">
                                @else
                                    <!-- Provide a default image or handle the case where there is no image -->
                                    <img src="{{ asset('path/to/default-image.jpg') }}" class="rounded-circle"
                                        alt="">
                                @endif

                                <div class="card-body p-0 pt-3">
                                    <h5 class="card-title"><a href="#" class="stretched-link">{{ $product->name }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Card item END -->
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
                                                                                                                    Near by END -->


        <!-- =======================
                                                                            Title and Tabs START -->
        <section class="pt-0 pb-4">
            <div class="container position-relative">

                <!-- Title and button START -->
                <div class="row">
                    <div class="col-12">
                        <!-- Meta START -->
                        <div class="d-flex justify-content-between">
                            <!-- tabs -->
                            <ul class="nav nav-pills nav-pills-dark" id="tour-pills-tab" role="tablist">

                                <!-- Tab item -->
                                <li class="nav-item">
                                    <div class="nav-link rounded-1 mb-0 active"><i class="bi fa-fw bi-grid-fill"></i></div>
                                </li>
                            </ul>
                        </div>
                        <!-- Meta END -->
                    </div>
                </div>
                <!-- Title and button END -->
            </div>
        </section>
        <!-- =======================
                                                                            Title and Tabs END -->

        <!-- Hotel grid START -->
        <section class="pt-0">
            <div class="container">
                <div class="row g-4">
                    @foreach ($transactions as $transaction)
                        <div class="col-md-6 col-xl-4">
                            <div class="card shadow p-2 pb-0 h-80">
                                <!-- Overlay item -->
                                <!-- ... -->

                                <!-- Slider START -->
                                <div class="tiny-slider arrow-round arrow-xs arrow-dark rounded-2 overflow-hidden">
                                    <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false"
                                        data-items="1">
                                        @foreach ($transaction->transactionImage as $image)
                                            <div><img src="{{ asset('storage/' . $image->image_path) }}" alt="Card image">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Slider END -->

                                <!-- Card body START -->
                                <div class="card-body px-3 pb-0">
                                    <!-- Title -->
                                    <h5 class="">{{ $transaction->character }} ({{ $transaction->anime }})</h5>
                                    {{-- <h5 class="">Ukuran {{ $transaction->size }}</h5> --}}

                                    <!-- List -->
                                    <ul class="nav nav-divider mb-2 mb-sm-3">
                                        @foreach ($transaction->extras as $extra)
                                            <li class="nav-item">{{ $extra->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Card body END -->

                                <!-- Card footer START-->
                                <div class="card-footer pt-0">
                                    <!-- Price and Button -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-center">
                                        <!-- Price -->
                                        <!-- Price -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="">Rp.
                                                {{ number_format($transaction->total_price, 0, ',', '.') }}.-</h5>
                                        </div>

                                        <!-- Button -->
                                        <div class="mt-0 mt-sm-0">
                                            <a href="/detail" class="btn btn-sm btn-primary-soft mb-0 w-100">Order
                                                Sekarang<i class="bi bi-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center mt-3">
                        {{ $transactions->links('pagination::bootstrap-4') }}
                    </div>
                </div> <!-- Row END -->
            </div>

        </section>
        <!-- Hotel grid END -->


    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"></div>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
@endsection
