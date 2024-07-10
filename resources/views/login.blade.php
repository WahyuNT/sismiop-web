<x-style />

<body class="bg-white col-login-right">
    <div class="">
        <div class="d-flex flex-wrap">
            <div class="col-lg-6 col-12 bg-primary-100  d-lg-block d-none" style="height: 100vh !important;">
                <div class="d-flex  align-items-center pt-lg-5">
                    <div class="auth-cover text-center mt-lg-5">
                        <div class="cover-image mt-lg-5">
                            <img class="w-50 rounded " src="{{ asset('img/tax.png') }}" alt="">
                        </div>
                        <div class="title text-center">
                            <h1 class="text-primary fw-bold mb-10">Selamat Datang</h1>
                            <p class="text-medium">
                                Silahkan masuk terlebih dahulu untuk melanjutkan
                            </p>
                        </div>
                        <div class="shape-image">
                            <img src="assets/images/auth/shape.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex align-items-center ">
                <div class="signin-wrapper ">
                    <div class="form-wrapper card card-login ">
                        @if (session('success'))
                            <div class="alert alert-success text-center text-lg-start">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger text-center text-lg-start">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h3 class="mb-lg-4 text-lg-start text-center ">Masuk</h3>
                        <p class="text-sm mb-25 text-lg-start text-center">
                            Silahkkan masukkan username dan katasandi.
                        </p>
                        <form action="{{ route('login.proses') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Username</label>
                                        <input name="username" type="text" placeholder="username" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Password</label>
                                        <input name="password" type="password" placeholder="Password" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button type="submit"
                                            class="main-btn primary-btn btn-hover rounded-pill w-100 text-center">
                                            Masuk
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
