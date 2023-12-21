@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

			<div class="card shadow">
				<!-- Card header -->
				<div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
					<!-- Avatar and content -->
					<div class="d-flex align-items-center flex-shrink-0">

						<!-- Info -->
						<div class="ms-3">
							<h5 class="mb-0">Lori Stevens</h5>
						</div>
					</div>

					<div class="d-block d-lg-flex gap-lg-5 flex-wrap mt-3 mt-lg-0">
						<!-- Email address -->
						<h6 class="mb-2 mb-lg-0"><i class="bi bi-envelope-fill fa-fw me-1"></i>Email id:<a href="#" class="fw-normal"> hello@gmail.com</a></h6>
					</div>
				</div>

				<!-- Card body -->
				<div class="card-body">

					<!-- Title -->
					<h5 class="mb-3">Transactions History</h5>

					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-6 justify-content-between g-4">
							<div class="col"><h6 class="mb-0">Product Name</h6></div>
                            <div class="col"><h6 class="mb-0">Order Date</h6></div>
                            <div class="col"><h6 class="mb-0">Total Price</h6></div>
                            <div class="col"><h6 class="mb-0">Payment Status</h6></div>
							<div class="col"><h6 class="mb-0">Review</h6></div>
                            <div class="col"><h6 class="mb-0">Shipping Details</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-sm-4 align-items-md-center justify-content-between border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<div class="d-flex align-items-center">
								{{-- <!-- Image -->
								<div class="w-80px flex-shrink-0">
									<img src="/images/sepatu/sepatu1.jpg" class="rounded" alt="">
								</div> --}}
								<!-- Title -->
								<u><h6 class="mb-0 ms-2"><a href="/productdetails">Tipe produk</h6></a></u>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">

							<h6 class="mb-0 fw-normal">Tanggal</h6>
						</div>

						<!-- Data item -->
						<div class="col">

							<h6 class="mb-0 fw-normal">Harga</h6>
						</div>


                        <!-- Data item -->
						<div class="col">
							<div class="badge bg-success bg-opacity-10 text-success">Payment Status</div>
                            {{-- <div class="badge bg-danger bg-opacity-10 text-danger">Status</div> --}}
						</div>

                        <!-- Data item -->
						<div class="col">
							<!-- Data item -->
                            <div class="col"><a href="/transaction" class="btn btn-sm btn-light mb-0">View</a></div>
						</div>

                        <!-- Data item -->
						<div class="col">

							<!-- Data item -->
                            <div class="col"><a href="/transaction" class="btn btn-sm btn-light mb-0">View</a></div>
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
