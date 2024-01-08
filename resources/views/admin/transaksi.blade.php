@extends('layout.templateadmin')

@section('layout_content')
    <!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

             <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Riwayat Transaksi</h1>
                </div>
            </div>
        </div>

			<div class="card shadow">
				<!-- Card header -->
				<div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
					<!-- Avatar and content -->
					<div class="d-flex align-items-center flex-shrink-0">

						<!-- Info -->
						<div class="ms-0">
							<h5 class="mb-0">Lori Stevens</h5>
						</div>
					</div>

					<div class="d-block d-lg-flex gap-lg-5 flex-wrap mt-3 mt-lg-0">
						<!-- Email address -->
						<h6 class="mb-2 mb-lg-0"><i class="bi bi-envelope-fill fa-fw me-1"></i>Email : <a href="#" class="fw-normal"> hello@gmail.com</a></h6>
					</div>
				</div>

				<!-- Card body -->
				<div class="card-body">



					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-6 g-4">
                            <div class="col"><h6 class="mb-0">ID Transaksi</h6></div>
							<div class="col"><h6 class="mb-0">Nama Produk</h6></div>
                            <div class="col"><h6 class="mb-0">Tanggal Order</h6></div>
                            <div class="col"><h6 class="mb-0">Total Harga</h6></div>
                            <div class="col"><h6 class="mb-0">Payment Status</h6></div>
                            <div class="col"><h6 class="mb-0">Shipping Details</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-6 align-items-lg-center border-bottom g-4 px-3 py-4">
						<!-- Data item -->


                        <!-- Data item -->
						<div class="col">

							<h6 class="mb-0 fw-normal">1</h6>
						</div>

                        <div class="col">

							<h6 class="mb-0 fw-normal"><a href="/admindetailproduksold"><u>Full Background</u></a></h6>
						</div>

						<!-- Data item -->
						<div class="col">

							<h6 class="mb-0 fw-normal">19-1-2023</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<h6 class="mb-0 fw-normal">Rp 980k</h6>
						</div>


                        <!-- Data item -->
						<div class="col">
							<div class="badge bg-success bg-opacity-10 text-success">Berhasil</div>
                            {{-- <div class="badge bg-danger bg-opacity-10 text-danger">Status</div> --}}
						</div>

                        <!-- Data item -->
						{{-- <div class="col"> --}}
							{{-- <div class="badge bg-success bg-opacity-10 text-success">Payment Status</div> --}}
                            {{-- <div class="badge bg-danger bg-opacity-10 text-danger">Menunggu Konfirmasi</div>
						</div> --}}

                        <div>
                            <div class="col"><a href="/adminshipping" class="btn btn-sm btn-light mb-0">View</a></div>
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
