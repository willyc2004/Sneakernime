@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">List Review</h1>

                </div>
            </div>
        </div>
        <!-- Filters END -->

        <!-- Guest list START -->
        <div class="card shadow mt-0">

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

            <!-- Card body START -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-6 g-4">
                        <div class="col">
                            <h6 class="mb-0">ID Review</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Tanggal Review</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Rating</h6>
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Komentar</h6>
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
                @foreach ($reviews as $review)
                    <div class="row row-cols-xl-6 align-items-lg-center border-bottom g-4 px-3   py-4">
                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $review->id }}</h6>
                        </div>

                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $review->review_date }}</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $review->rating }}</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $review->comment }}</h6>
                        </div>

                        <!-- Image and content -->
                        <div class="col-md-4">
                            <div class="position-relative">
                                @foreach ($review->transaction->transactionImage as $index => $image)
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
                                                        data-gallery="gallery{{ $review->transaction->id }}">
                                                        {{ count($review->transaction->transactionImage) }} Photos <i
                                                            class="bi bi-arrow-right"></i>
                                                    </a>
                                                </div>
                                            @else
                                                <a data-glightbox="" data-gallery="gallery{{ $review->transaction->id }}"
                                                    href="{{ asset('storage/' . $image->image_path) }}"
                                                    class="stretched-link z-index-9"></a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- {{ route('adminfotoproduk.destroy', $image->id) }} --}}
                        <div class="col">
                            <form action="{{ route('adminreview.destroy', $review->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-md btn-danger mb-0">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer pt-0">
                <div class="d-flex justify-content-center mt-3">
                    {{ $reviews->links('pagination::bootstrap-4') }}
                </div>
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Guest list END -->
    </div>
    <!-- Page main content END -->

    </div>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

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
