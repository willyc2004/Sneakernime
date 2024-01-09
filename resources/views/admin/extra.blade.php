@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">List Extra</h1>
                    {{-- <a href="#" class="btn btn-md btn-success mb-0">Add Produk</a> --}}
                </div>
            </div>
        </div>
        <!-- Filters END -->

        <!-- Guest list START -->
        <div class="card shadow mt-0">
            <!-- Card body START -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-6 g-4">
                        <div class="col">
                            <h6 class="mb-0">ID Extra</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Nama</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Deskripsi</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Harga</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Images</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Action</h6>
                        </div>

                    </div>
                </div>

                <!-- Table data -->

                @foreach ($extras as $extra)
                    <div class="row row-cols-xl-6 align-items-lg-center border-bottom g-4 px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $extra->id }}</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $extra->name }}</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $extra->description }}</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $extra->price }}</h6>
                        </div>
                        {{-- <img src="images/Product/FB_1.jpg" alt=""> --}}

                        <!-- Image and content -->
                        <div class="col-md-4">
                            <!-- Image -->
                            <div class="position-relative">
                                @foreach ($extra->images as $index => $image)
                                    <!-- Image and content -->
                                    <div class="col-md-4">
                                        <!-- Image -->
                                        <div class="position-relative">
                                            @if ($index === 0)
                                                <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img"
                                                    alt="">
                                                <!-- Badge -->
                                                <div class="card-img-overlay">
                                                    <a href="{{ asset('storage/' . $image->image_path) }}"
                                                        class="badge bg-dark stretched-link" data-glightbox=""
                                                        data-gallery="gallery{{ $extra->id }}">
                                                        {{ count($extra->images) }} Photos <i class="bi bi-arrow-right"></i>
                                                    </a>
                                                </div>
                                            @else
                                                <a data-glightbox="" data-gallery="gallery{{ $extra->id }}"
                                                    href="{{ asset('storage/' . $image->image_path) }}"
                                                    class="stretched-link z-index-9"></a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ route('adminfotoextra', $extra) }}" class="btn btn-info btn-sm">Ganti Gambar</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Card body END -->


        </div>
        <!-- Guest list END -->
    </div>
    <!-- Page main content END -->

    </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/sticky-js/sticky.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
@endsection
