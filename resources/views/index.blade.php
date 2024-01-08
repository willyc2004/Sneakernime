@extends('layout.template')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- Bootstrap modal -->
        <div class="modal" tabindex="-1" role="dialog" id="customPopup">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Alert</h5>
                    </div>
                    <div class="modal-body" id="popup-message"></div>
                </div>
            </div>
        </div>

        <!-- =======================
                                                                                                            Main Banner START -->
        <section class="py-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                            <div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false"
                                data-items="1">
                                <!-- Card item START -->
                                @foreach ($products as $product)
                                    @foreach ($product->images as $image)
                                        <div class="card overflow-hidden h-400px h-sm-600px rounded-0"
                                            style="background-image:url({{ asset('storage/' . $image->image_path) }}); background-position: center left; background-size: cover;">
                                            <!-- Background dark overlay -->
                                            <div class="bg-overlay bg-dark opacity-3"></div>
                                            <!-- Card image overlay -->
                                            <div class="card-img-overlay d-flex align-items-center">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-14 col-lg-9">
                                                            <h6 class="text-white fw-normal mb-0">Personalisasi Langkah Anda
                                                                dengan
                                                                Kustom Anime!</h6>
                                                            <!-- Title -->
                                                            <h1 class="text-white display-6">Kustom Karakter Anime Favoritmu
                                                                di
                                                                Sepatu
                                                            </h1>
                                                            <a href="/sneakers" class="btn btn-primary mb-0">Lihat Lebih</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                                <!-- Card item END -->
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                                                                                                            Main Banner END -->

        <!-- =======================
                                                                                                            Special offer START -->
        <section class="pb-0">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h3 class="mb-0">Tipe-tipe Kustom</h3>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="tiny-slider-inner mb-8" data-autoplay="true" data-arrow="true" data-edge="2"
                        data-dots="false" data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-sm="1">

                        <!-- Offer card START -->
                        @foreach ($products as $productIndex => $product)
                            <div>
                                <div class="card">
                                    @foreach ($product->images as $imageIndex => $image)
                                        @if ($imageIndex === 0)
                                            <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img"
                                                alt="">

                                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                                    <h6 class="mb-1">{{ $product->name }}</h6>
                                                    <small>{{ $product->price }}</small>
                                                    <div class="mt-2"><a href="/sneakers"
                                                            class="btn btn-sm btn-dark mb-0">Lihat
                                                            Lebih</a></div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <!-- Offer card END -->
                                </div>
                                <!-- Card body -->
                            </div>
                        @endforeach


                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </section>
        <!-- =======================
                                                                                                            Special offer END -->

        <!-- =======================
                                                                                                            About START -->
        <section class="py-0 py-lg-7">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2>Kami merupakan salah satu yang terbaik dalam melakukan Kustom pada sepatu.</h2>
                        <p class="mb-0">"Kami selalu menggunakan cat akrilik berkualitas tinggi dan mendatangkan seniman
                            terampil untuk menciptakan sepatu kustom yang menakjubkan. Komitmen kami terhadap material
                            terbaik
                            dan keahlian artistik memastikan setiap orderan kustom sukses."</p>
                    </div>
                </div>

                <!-- Counters and features START -->
                <div class="row g-4">
                    <!-- Counter -->
                    <div class="col-xl-4">
                        <div class="card card-body bg-primary bg-opacity-10 vstack gap-4 justify-content-center h-100 p-4">
                            <!-- Counter Artists -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-center me-3">
                                    <h3 class="purecounter text-primary mb-0" data-purecounter-start="0"
                                        data-purecounter-end="20" data-purecounter-delay="300">0</h3>
                                    <span class="h3 text-primary mb-0">+</span>
                                </div>
                                <h6 class="fw-normal mb-0">Total Penggambar</h6>
                            </div>

                            <!-- Counter Sneakers -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-center me-3">
                                    <h3 class="purecounter text-primary mb-0" data-purecounter-start="0"
                                        data-purecounter-end="600" data-purecounter-delay="300">0</h3>
                                    <span class="h3 text-primary mb-0">+</span>
                                </div>
                                <h6 class="fw-normal mb-0">Sneakers Dikustom</h6>
                            </div>

                            <!-- Counter item -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-center me-3">
                                    <h3 class="purecounter text-primary mb-0" data-purecounter-start="0"
                                        data-purecounter-end="120" data-purecounter-delay="300">0</h3>
                                    <span class="h3 text-primary mb-0">+</span>
                                </div>
                                <h6 class="fw-normal mb-0">Pengiriman Internasional</h6>
                            </div>

                        </div>
                    </div>

                    <!-- Location -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card  overflow-hidden">
                            <!-- Image -->
                            <img src="images/Alamat.png" class="rounded-3" alt="">
                            <!-- Full screen button -->
                            <div class="w-100 h-100">
                                <button class="btn btn-dark position-absolute top-50 start-50 translate-middle mb-0"
                                    data-bs-toggle="modal" data-bs-target="#map360">
                                    <i class="bi bi-eye me-2"></i>Alamat Kami
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="col-md-6 col-xl-4">
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item py-3">
                                <h6 class="mb-0 fw-normal">
                                    <i class="bi bi-cash-coin fa-fw text-info me-2"></i>Harga Terbaik
                                </h6>
                            </li>

                            <li class="list-group-item py-3">
                                <h6 class="mb-0 fw-normal">
                                    <i class="bi bi-credit-card-2-back fa-fw text-warning me-2"></i>Pembayaran Online
                                </h6>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- Counters and features END -->
            </div>
        </section>
        <!-- =======================
                                                                                                            About END -->

        <!-- =======================
                                                                                                            Gallery START -->
        <section>
            <div class="container-fluid">
                <!-- Title -->
                <div class="row mb-md-4">
                    <div class="col-12 mx-auto text-center mb-4">
                        <h2 class="mb-0">Galeri Sneakers</h2>
                    </div>
                </div>
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner d-flex align-items-end" data-autoplay="true" data-edge="2"
                        data-arrow="true" data-dots="false" data-items="6" data-items-lg="4" data-items-sm="2">
                        @foreach ($products as $product)
                            @foreach ($product->images as $image)
                                <!-- Slider item -->
                                <div>
                                    <a data-glightbox="" data-gallery="gallery"
                                        href="{{ asset('storage/' . $image->image_path) }}">
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
                        @endforeach
                    </div>
                </div>
                <!-- Slider END -->


            </div>
        </section>
        <!-- =======================
                                                                                                            Gallery END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->



    <!-- Modal START -->
    <div class="modal fade" id="map360" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Title -->
                <div class="modal-header">
                    <h5 class="modal-title" id="map360label">Alamat Kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Body -->
                <div class="modal-body p-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.59366479815!2d112.78450935755788!3d-7.352011792933898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fad3b03da875%3A0x3150cb4591f3e38a!2sPondok%20Tjandra%20Indah%20Sports%20Club!5e0!3m2!1sen!2sid!4v1703159403129!5m2!1sen!2sid"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


            </div>
        </div>
    </div>
    <!-- Modal END -->

    <!-- Back to top -->
    <div class="back-top"></div>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jarallax/jarallax-video.min.js') }}"></script>


    <!-- ThemeFunctions -->
    <script src="{{ 'assets/js/functions.js' }}"></script>

    <script>
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const message = urlParams.get('message');

            if (message) {
                // Display the Bootstrap modal with the message
                $('#popup-message').text(message);
                $('#customPopup').modal('show');
            }
        });
    </script>
@endsection
