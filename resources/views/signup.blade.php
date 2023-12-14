@extends('layout.sign')

@section('layout_content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
        Main Content START -->
        <section class="vh-xxl-100">
            <div class="container h-100 d-flex px-0 px-sm-4">
                <div class="row justify-content-center align-items-center m-auto">
                    <div class="col-12">
                        <div class="bg-mode shadow rounded-3 overflow-hidden">
                            <div class="row g-0">
                                <!-- Vector Image -->
                                <div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
                                    <div class="p-3 p-lg-5">
                                        <img src="assets/images/element/signin.svg" alt="">
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr opacity-1 d-none d-lg-block"></div>
                                </div>

                                <!-- Information -->
                                <div class="col-lg-6 order-1">
                                    <div class="p-4 p-sm-6">
                                        <!-- Logo -->
                                        <a href="index.html">
                                            <img class="h-50px mb-4" src="assets/images/logo-icon.svg" alt="logo">
                                        </a>
                                        <!-- Title -->
                                        <h1 class="mb-2 h3">Create new account</h1>
                                        <p class="mb-0">Already a member?<a href="/signin"> Log in</a></p>

                                        <!-- Form START -->
                                        <form class="mt-4 text-start">
                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Enter email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <!-- Password -->
                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Enter password</label>
                                                <input class="form-control fakepassword" type="password" id="psw-input">
                                                <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                    <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                </span>
                                            </div>
                                            <!-- Confirm Password -->
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            {{-- <!-- Remember me -->
                                            <div class="mb-3">
                                                <input type="checkbox" class="form-check-input" id="rememberCheck">
                                                <label class="form-check-label" for="rememberCheck">Keep me signed
                                                    in</label>
                                            </div> --}}
                                            <!-- Button -->
                                            <div><button type="submit" class="btn btn-primary w-100 mb-0">Sign up</button>
                                            </div>

                                            <!-- Divider -->
                                            <div class="position-relative my-4">
                                                <hr>
                                                <p
                                                    class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">
                                                    Or sign in with</p>
                                            </div>

                                            <!-- Google and facebook button -->
                                            <div class="vstack gap-3">
                                                <a href="#" class="btn btn-light mb-0"><i
                                                        class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with
                                                    Google</a>
                                            </div>

                                            <!-- Copyright -->
                                            <div class="text-primary-hover text-body mt-3 text-center"> Copyrights ©2023
                                                Sneakernime. Build by <a href="/"
                                                    class="text-body">Wira Company</a>. </div>
                                        </form>
                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Main Content END -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>
@endsection
