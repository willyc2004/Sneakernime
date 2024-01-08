@extends('layout.template')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <!-- =======================
                                                                                                                                        Main Banner START -->
    <section class="pt-4">
        <div class="container">
            <main>
                <!-- Title -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <h1 class="fs-3">{{ $product->name }}</h1>
                        <!-- Location -->
                        <p class="fw-bold mb-0">Rp. {{ $product->price }}</p>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur">
                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="0" data-dots="false"
                        data-items="3" data-items-sm="1">

                        @foreach ($product->images as $image)
                            {{-- <h2>{{ $image->image_path }}</h2> --}}
                            <!-- Slider item -->
                            <div>
                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
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
                    </div>
                </div>
                <!-- Slider START -->
        </div>
    </section>
    <!-- =======================
                                                                                                                                            Main Banner END -->

    <!-- =======================
                                                                                                                                            Room detail START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Detail START -->
                <div class="col-xl-7">
                    <div class="card bg-transparent p-0">
                        <!-- Card header -->
                        <div
                            class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3">
                            <h4 class="mb-2 mb-sm-0">Pilih Tambahan</h4>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-0 pt-3">
                            <div class="vstack gap-5">
                                <!-- Room item START -->
                                @foreach ($extras as $extra)
                                    <div class="card border bg-transparent p-3">
                                        <div class="row g-3 g-md-4">
                                            <!-- Image and content -->
                                            <div class="col-md-4">
                                                <!-- Image -->
                                                <div class="position-relative">
                                                    @foreach ($extra->images as $index => $image)
                                                        <!-- Image and content -->
                                                        <div class="position-relative">
                                                            @if ($index === 0)
                                                                <!-- Display only the first image with badge -->
                                                                <img src="{{ asset('storage/' . $image->image_path) }}"
                                                                    class="card-img" alt="">
                                                                <!-- Badge -->
                                                                <div class="card-img-overlay">
                                                                    <a href="{{ asset('storage/' . $image->image_path) }}"
                                                                        class="badge bg-dark stretched-link"
                                                                        data-glightbox=""
                                                                        data-gallery="gallery{{ $extra->id }}">
                                                                        {{ count($extra->images) }} Photos <i
                                                                            class="bi bi-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            @else
                                                                <!-- Display other images without badge -->
                                                                <a data-glightbox=""
                                                                    data-gallery="gallery{{ $extra->id }}"
                                                                    href="{{ asset('storage/' . $image->image_path) }}"
                                                                    class="stretched-link z-index-9"></a>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- Room detail START -->
                                            <div class="col-md-8">
                                                <div class="card-body d-flex flex-column p-0 h-100">
                                                    <!-- Title -->
                                                    <h5 class="card-title">{{ $extra->title }}</h5>
                                                    <!-- Description -->
                                                    <p>{{ $extra->description }}</p>
                                                    <!-- Price and button -->
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
                                                        <div class="d-flex text-success">
                                                            <h6 class="h5 mb-0 text-success">Rp
                                                                {{ number_format($extra->price, 2) }}</h6>
                                                        </div>
                                                        <a href="#" class="btn btn-sm btn-dark mb-0">Select extra</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Room detail END -->
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Room item END -->
                            </div>
                        </div>
                        <!-- Card body END -->

                    </div>

                </div>
                <!-- Detail END -->



                <!-- Right side content START -->
                <aside class="col-xl-5">


                    <div class="card bg-transparent border">
                        <!-- Card header START -->
                        <div class="card-header bg-transparent border-bottom">
                            <!-- Title -->
                            <h4 class="card-title mb-0">Cek Ongkir</h4>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">

                            <div class="mt-0">
                                @if ($ongkir != '')
                                    @foreach ($ongkir['results'] as $item)
                                        <div>
                                            <h5 for="name">Kurir: {{ $item['name'] }}</h5>
                                            <label for="service">Pilih Service:</label>
                                            <select id="service" name="service">
                                                @foreach ($item['costs'] as $cost)
                                                    <div class="mb-3">
                                                        @foreach ($cost['cost'] as $harga)
                                                            @php
                                                                // Memformat nilai harga ke dalam format rupiah
                                                                $formattedHarga = 'Rp ' . number_format($harga['value'], 0, ',', '.');
                                                            @endphp

                                                            <option
                                                                value="{{ $cost['service'] }} - Harga: {{ $formattedHarga }} (est: {{ $harga['etd'] }} hari)">
                                                                {{ $cost['service'] }} - Harga: {{ $formattedHarga }}
                                                                (est:
                                                                {{ $harga['etd'] }} hari)
                                                            </option>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endforeach
                                    <!-- Nama Lengkap -->
                                    <div class="col-12 mt-4">
                                        <label for="full_name" class="form-label">Nama Lengkap *</label>
                                        <input name="full_name" id="full_name" class="form-control" type="text"
                                            placeholder="Nama Lengkap" required>
                                    </div>

                                    <!-- Kode Pos -->
                                    <div class="col-12 mt-2">
                                        <label for="postal_code" class="form-label">Kode Pos *</label>
                                        <input name="postal_code" id="postal_code" class="form-control" type="text"
                                            placeholder="Kode Pos" required>
                                    </div>

                                    <!-- No Telp -->
                                    <div class="col-12 mt-2">
                                        <label for="phone" class="form-label">No Telp *</label>
                                        <input name="phone" id="phone" class="form-control" type="tel"
                                            placeholder="No Telp" required>
                                    </div>

                                    <!-- Alamat Lengkap -->
                                    <div class="col-12 mt-2">
                                        <label for="address" class="form-label">Alamat Lengkap *</label>
                                        <textarea name="address" id="address" class="form-control" placeholder="Alamat Lengkap" required></textarea>
                                    </div>
                                @else
                                    <form action="" method="post">
                                        @csrf
                                        <div class="row g-3">
                                            <!-- Kota Tujuan -->
                                            <div class="col-12">
                                                <label for="destination" class="form-label">Kota Tujuan *</label>
                                                <select name="destination" id="destination" class="form-select js-choice"
                                                    data-search-enabled="true">
                                                    <option value="">Pilih Kota Tujuan</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Courier -->
                                            <div class="col-md-6">
                                                <label for="courier" class="form-label">Pilih Ekspedisi *</label>
                                                <select name="courier" id="courier" class="form-select js-choice"
                                                    data-search-enabled="true" required>
                                                    <option value="">Pilih Ekspedisi</option>
                                                    <option value="jne">JNE</option>
                                                    <option value="pos">POS</option>
                                                    <option value="tiki">TIKI</option>
                                                </select>
                                            </div>


                                            <!-- Button -->
                                            <div class="d-grid gap-2">
                                                <input type="submit" name="cekOngkir" class="btn btn-dark mb-0">
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <!-- Title -->
                                <h4 class="card-title mb-0">Total Harga</h4>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">

                                <form action="">
                                    @csrf

                                    <!-- List -->
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item px-2 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Full Background</span>
                                            <span class="h6 fw-light mb-0">Rp 970.000,-</span>
                                        </li>
                                        <li class="list-group-item px-2 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Glow</span>
                                            <span class="h6 fw-light mb-0">Rp 90.000,-</span>
                                        </li>
                                        <li class="list-group-item px-2 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Shipment Fee</span>
                                            <span class="h6 fw-light mb-0">Rp ...,-</span>
                                        </li>

                                        <li
                                            class="list-group-item bg-light d-flex justify-content-between rounded-2 px-2 mt-2">
                                            <span class="h5 fw-normal mb-0 ps-1">Total</span>
                                            <span class="h5 fw-normal mb-0">Rp ...,-</span>
                                        </li>
                                        <div class="mt-4">
                                            <label for="anime" class="form-label">Nama Anime yang mau dikustom
                                                *</label>
                                            <input name="anime" id="anime" type="text" class="form-control"
                                                placeholder="Contoh : Naruto" required>
                                        </div>
                                        <div class="mt-2">
                                            <label for="character" class="form-label">Nama Karakter yang mau dikustom
                                                *</label>
                                            <input name="character" id="character" type="text" class="form-control"
                                                placeholder="Contoh : Uzumaki Naruto & Sasuke" required>
                                        </div>
                                        <!-- Alamat Lengkap -->
                                        <div class="mt-2">
                                            <label for="note" class="form-label">Catatan Tambahan</label>
                                            <textarea name="note" id="note" class="form-control"
                                                placeholder="Contoh : Sepatu Kanan Gambar Naruto, Sepatu Kiri Gambar Sasuke"></textarea>
                                        </div>
                                    </ul>

                                    <!-- Button -->
                                    <div class="d-grid gap-2">
                                        <button type="submit" name="transaksi" class="btn btn-primary">Continue</button>
                                    </div>

                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                </aside>
                <!-- Right side content END -->
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                                                            Room detail END -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/sticky-js/sticky.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

@endsection
