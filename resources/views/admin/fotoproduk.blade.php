@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Foto Produk</h1>
                </div>
                <div class="mt-4">
                    <form action="{{ url('/admintambahfoto/' . $id_product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="add_image" class="form-label">Shop Image</label>
                            <img id="add_image_preview" class="img-preview img-fluid mb-3 col-sm-5" src="">
                            <input type="file" name="add_image" class="form-control"
                                accept="image/jpg, image/png, image/jpeg" onchange="previewImage()">
                            <input type="hidden" name="id_product" value="{{ $id_product }}">
                        </div>

                        <button type="submit" class="btn btn-md btn-success mb-0">Add Foto Produk</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                <!-- Avatar and content -->
                <div class="ms-0">
                    <h5 class="mb-0">ID Produk : 1</h5>
                </div>
            </div>

            <!-- Card body -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-3 g-4">
                        <div class="col">
                            <h6 class="mb-0">ID Foto Produk</h6>
                        </div>

                        <div class="col">
                            <h6 class="mb-0">Foto</h6>
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
                <div class="row row-cols-xl-3 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="row row-cols-xl-3 align-items-lg-center border-bottom g-4 px-2 py-4">
                        @foreach ($images as $image)
                            <div class="col">
                                <h6 class="mb-0 fw-normal">{{ $image->id }}</h6>
                            </div>

                            <img src="{{ asset('storage/' . $image->path) }}" alt="">
                            <div class="col"><a href="#" class="btn btn-md btn-danger mb-0">Delete</a></div>
                        @endforeach
                    </div>

                    <!-- Data item -->
                    <div class="col">

                        <h6 class="mb-0 fw-normal">1</h6>
                    </div>

                    <img src="images/sepatu/sepatu1.jpg" alt="">


                    <div class="col"><a href="#" class="btn btn-md btn-danger mb-0">Delete</a></div>

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

    {{-- Preview Image --}}
    <script>
        function previewImage() {
            const image = document.querySelector('input[name="add_image"]');
            const imgPreview = document.querySelector('#add_image_preview');

            imgPreview.style.display = 'block';

            const offReader = new FileReader();
            offReader.readAsDataURL(image.files[0]);

            offReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
