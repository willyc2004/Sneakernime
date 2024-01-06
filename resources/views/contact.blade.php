@extends('layout.template')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                                            Main banner START -->
        <section class="pt-4 pt-md-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-xl-10">
                        <!-- Title -->
                        <h1>Mari terhubung dan saling mengenal</h1>
                        <p class="lead mb-0">Jangan ragu untuk bertanya tentang apa pun, apakah Anda ingin memesan atau
                            cukup merencanakan desain sepatu lukis khusus Anda dengan layanan kami.</p>
                    </div>
                </div>

                <!-- Contact info -->
                <div class="row g-4">

                    <!-- Contact item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-2"><i
                                    class="bi bi-headset fs-5"></i></div>
                            <!-- Title -->
                            <h5>Kirim Pesan</h5>
                            <p>Kirimkan pesan kepada kami untuk bertanya lebih lanjut tentang sepatu kustom.</p>
                            <!-- Buttons -->
                            <div class="d-grid gap-3 d-sm-block">
                                <a href="https://api.whatsapp.com/send?phone=628997639030&text=Halo%20min,%20mau%20kustom%20sepatu"
                                    target="_blank"><button class="btn btn-sm btn-primary-soft"><i
                                            class="bi bi-phone me-2"></i>(+62) 899-763-9030</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- Contact item END -->

                    <!-- Contact item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-2"><i
                                    class="bi bi-inboxes-fill fs-5"></i></div>
                            <!-- Title -->
                            <h5>Kirim Email</h5>
                            <p>Kirimkan email kepada kami jika ada saran ataupun bertanya tentang sepatu kustom.</p>
                            <!-- Buttons -->
                            <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=halimcahya21@gmail.com&body=Halo+min,+mau+kustom+sepatu"
                                target="_blank" class="btn btn-link text-decoration-underline p-0 mb-0"><i
                                    class="bi bi-envelope me-1"></i>halimcahya21@gmail.com</a>
                        </div>
                    </div>
                    <!-- Contact item END -->

                    <!-- Contact item START -->
                    <div class="col-xl-4 position-relative">
                        <!-- Svg decoration -->
                        <figure class="position-absolute top-0 end-0 z-index-1 mt-n4 ms-n7">
                            <svg class="fill-warning" width="77px" height="77px">
                                <path
                                    d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z">
                                </path>
                            </svg>
                        </figure>

                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-2"><i
                                    class="bi bi-globe2 fs-5"></i></div>
                            <!-- Title -->
                            <h5>Media Sosial</h5>
                            <p>Follow kami di media sosial untuk melihat sepatu anime yang telah dikustom.</p>
                            <!-- Buttons -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0"
                                        href="https://www.instagram.com/sneakernime/" target="_blank"><i
                                            class="fab fa-fw fa-instagram"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0"
                                        href="https://www.tiktok.com/@sneakernime?lang=en" target="_blank"><i
                                            class="fab fa-fw fa-tiktok"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact item END -->
                </div>
            </div>
        </section>
        <!-- =======================
                                                            Main banner START -->

        <!-- =======================
                                                            Contact form and vector START -->
        <section class="pt-0 pt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <!-- Vector image START -->
                    <div class="col-lg-6 text-center">
                        <img src="assets/images/element/contact.svg" alt="">
                    </div>
                    <!-- Vector image END -->

                    <!-- Contact form START -->
                    <div class="col-lg-6">
                        <div class="card bg-light p-4">
                            <!-- Svg decoration -->
                            <figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
                                <svg class="fill-orange" width="104.2px" height="95.2px">
                                    <circle cx="2.6" cy="92.6" r="2.6" />
                                    <circle cx="2.6" cy="77.6" r="2.6" />
                                    <circle cx="2.6" cy="62.6" r="2.6" />
                                    <circle cx="2.6" cy="47.6" r="2.6" />
                                    <circle cx="2.6" cy="32.6" r="2.6" />
                                    <circle cx="2.6" cy="17.6" r="2.6" />
                                    <circle cx="2.6" cy="2.6" r="2.6" />
                                    <circle cx="22.4" cy="92.6" r="2.6" />
                                    <circle cx="22.4" cy="77.6" r="2.6" />
                                    <circle cx="22.4" cy="62.6" r="2.6" />
                                    <circle cx="22.4" cy="47.6" r="2.6" />
                                    <circle cx="22.4" cy="32.6" r="2.6" />
                                    <circle cx="22.4" cy="17.6" r="2.6" />
                                    <circle cx="22.4" cy="2.6" r="2.6" />
                                    <circle cx="42.2" cy="92.6" r="2.6" />
                                    <circle cx="42.2" cy="77.6" r="2.6" />
                                    <circle cx="42.2" cy="62.6" r="2.6" />
                                    <circle cx="42.2" cy="47.6" r="2.6" />
                                    <circle cx="42.2" cy="32.6" r="2.6" />
                                    <circle cx="42.2" cy="17.6" r="2.6" />
                                    <circle cx="42.2" cy="2.6" r="2.6" />
                                    <circle cx="62" cy="92.6" r="2.6" />
                                    <circle cx="62" cy="77.6" r="2.6" />
                                    <circle cx="62" cy="62.6" r="2.6" />
                                    <circle cx="62" cy="47.6" r="2.6" />
                                    <circle cx="62" cy="32.6" r="2.6" />
                                    <circle cx="62" cy="17.6" r="2.6" />
                                    <circle cx="62" cy="2.6" r="2.6" />
                                    <circle cx="81.8" cy="92.6" r="2.6" />
                                    <circle cx="81.8" cy="77.6" r="2.6" />
                                    <circle cx="81.8" cy="62.6" r="2.6" />
                                    <circle cx="81.8" cy="47.6" r="2.6" />
                                    <circle cx="81.8" cy="32.6" r="2.6" />
                                    <circle cx="81.8" cy="17.6" r="2.6" />
                                    <circle cx="81.8" cy="2.6" r="2.6" />
                                    <circle cx="101.7" cy="92.6" r="2.6" />
                                    <circle cx="101.7" cy="77.6" r="2.6" />
                                    <circle cx="101.7" cy="62.6" r="2.6" />
                                    <circle cx="101.7" cy="47.6" r="2.6" />
                                    <circle cx="101.7" cy="32.6" r="2.6" />
                                    <circle cx="101.7" cy="17.6" r="2.6" />
                                    <circle cx="101.7" cy="2.6" r="2.6" />
                                </svg>
                            </figure>

                            <!-- Card header -->
                            <!-- Your HTML form -->
                            <div class="card-header bg-light p-0 pb-3">
                                <h3 class="mb-0">Kirim Pesan Anda Sekarang!</h3>
                            </div>

                            <div class="card-body p-0">
                                <form class="row g-4" id="whatsappForm">
                                    <div class="col-md-12">
                                        <label class="form-label">Nama Anda *</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Pesan *</label>
                                        <textarea class="form-control" rows="7" id="message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark mb-0" type="submit" id="sendMessageBtn">Kirim
                                            Pesan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Contact form END -->
                </div>
            </div>
        </section>
        <!-- =======================
                                                            Contact form and vector END -->

        <!-- =======================
                                                            Faqs START-->
        <section class="pt-0 pt-lg-5">
            <div class="container">

                <!-- Title -->
                <div class="row">
                    <div class="col-lg-10 col-xl-8 mx-auto">
                        <h2 class="mb-4 text-center">Frequently Asked Questions</h2>

                        <!-- FAQ START -->
                        <div class="accordion accordion-icon accordion-bg-light" id="accordionFaq">
                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                        aria-controls="collapse-1">
                                        Untuk proses pengkustoman berapa lama kak?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body mt-3 pb-0">
                                        Proses kustom sepatu Sneakernime umumnya memerlukan waktu sekitar 15 hari. Waktu ini
                                        melibatkan diskusi detail kustom, periode pengerjaan, dan mungkin revisi jika
                                        diperlukan.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">
                                        Kalau terkena air catnya luntur ngga kak?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body mt-3 pb-0">
                                        Semua sepatu yang telah kami kustom telah dilapisi dengan finishing waterproof
                                        sebanyak 2-3 kali untuk mencegah luntur jika terkena air. Kami juga memastikkan
                                        bahwa sepatu dikirim dengan aman menggunakan Bubble Wrap dan juga Double Box.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-3">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">
                                        Untuk sepatunya apa bisa request gambar/ harus sama persis sesuai postingan kak?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body mt-3 pb-0">
                                        Di sini, kami menawarkan layanan jasa gambar/kustom pada sepatu, jadi pelanggan
                                        dapat membuat
                                        permintaan khusus untuk gambar yang ingin digambar di sepatu mereka, tidak harus
                                        sama persis dengan postingan yang ada.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-4">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">
                                        Untuk warna cat glownya ada apa saja?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body mt-3 pb-0">
                                        Untuk warna cat glow terdapat 3 macam, yaitu Glow Biru, Glow Biru Toska, dan Glow
                                        Hijau.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-5">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                        aria-controls="collapse-5">
                                        Untuk pengiriman di Indonesia pakai ekspedisi apa? Bisa kirim ke luar negeri kak?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body mt-3 pb-0">
                                        Untuk pengiriman di dalam Indonesia kami biasanya menggunakan ekspedisi J&T, JNE,
                                        dan SiCepat. Namun bisa juga memakai ekspedisi sesuai dari request pembeli.
                                        Sneakernime juga melayani pengiriman ke luar negeri menggunakan Ekspedisi Rayspeed
                                        Asia, disini kami telah melayani lebih dari 100++ kustomer luar negeri mulai dari ke
                                        Malaysia, Singapura, Filipina, Korean dan bahkan Jepang.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-6">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                        aria-controls="collapse-6">
                                        Bagaimana cara cat glow berfungsi kak?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body mt-3 pb-0">
                                        Cat glow dibuat dari bubuk fosfor yang dapat menyerap cahaya. Untuk menyalakan cat
                                        glow in the dark, cukup arahkan flashlight HP/ berjalan-jalan di matahari terang,
                                        lalu pergi ke tempat gelap. Maka, cat glow in the dark akan menyala sendiri sekitar
                                        10-15 menit.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                                                            Faqs END-->


        <!-- =======================
                                                        Map START -->
        <section class="pt-0 pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <iframe class="w-100 h-300px grayscale rounded"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.59366479815!2d112.78450935755788!3d-7.352011792933898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fad3b03da875%3A0x3150cb4591f3e38a!2sPondok%20Tjandra%20Indah%20Sports%20Club!5e0!3m2!1sen!2sid!4v1703159403129!5m2!1sen!2sid"
                            height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                    </div>


                </div>
            </div>
        </section>
        <!-- =======================
                                                        Map END -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>

    <script>
        $(document).ready(function() {
            // Event listener for the button click
            $("#sendMessageBtn").click(function() {
                // Get form inputs
                var name = $("#name").val();
                var message = $("#message").val();

                // Check if name and message are filled
                if (!name.trim() || !message.trim()) {
                    // If name or message is not filled, do nothing
                    return;
                }

                // Construct the WhatsApp link with pre-built message
                var whatsappLink = "https://api.whatsapp.com/send?phone=628997639030&text=" +
                    encodeURIComponent("Halo min saya " + name + ", " + message);

                // Open WhatsApp link in a new window
                window.open(whatsappLink, '_blank');
            });
        });
    </script>
@endsection
