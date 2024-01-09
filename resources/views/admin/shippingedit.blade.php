@extends('layout.templateadmin')

@section('layout_content')
    <!-- Listing category START -->
    <div class="page-content-wrapper p-xxl-4">
        <a href="{{ route('adminproduk') }}" class="text-decoration-none">
            <i class="fas fa-arrow-left fa-3x m-4 ms-0"></i>
        </a>


        <!-- Card body START -->
        <div class="card-body">
            <div class="row g-4">
                <form action="{{ route('adminshippingupdate', $transaction) }}" method="POST">
                    @method('put')
                    @csrf
                    <h5 class="mb-0">ID Shipping : {{ $shipping->id }}</h5>
                    <!-- Choose type -->
                    <div class="col-12">
                        <label class="form-label">Update Status Shipping</label>
                        <select class="form-select js-choice" name="status">
                            <option value="{{ $shipping->statusShipping->status }}"></option>
                            @foreach ($statuses as $status)
                                <option>{{ $status->status }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Listing Name -->
                    <div class="col-12">
                        <label class="form-label">Update Resi</label>
                        <input class="form-control" name="resi" type="text" placeholder="{{ $shipping->resi }}">
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btm-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Card body END -->
    </div>
    <!-- Listing category END -->

    </div>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>


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
