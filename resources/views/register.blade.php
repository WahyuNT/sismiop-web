<x-style />

<body class="bg-white col-login-right">
    <div class="">
        <div class="d-flex flex-wrap">
            <div class="col-lg-6 col-12 d-flex align-items-center ">
                <div class="signin-wrapper ">
                    <div class="form-wrapper card card-login ">
                        <h3 class="mb-lg-4 fw-bold text-center ">Buat Akun</h3>

                        <form action="{{ route('register.proses') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Username</label>
                                        <input required name="username" type="text" placeholder="username" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <input required name="email" type="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Password</label>
                                        <input required name="password" type="password" placeholder="Password" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button type="submit"
                                            class="main-btn primary-btn btn-hover rounded-pill w-100 text-center">
                                            Buat Akun
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 bg-primary-100  d-lg-block d-none" style="height: 100vh !important;">
                <div class="d-flex justify-content-center align-items-center pt-lg-5">
                    <div class="auth-cover text-center mt-lg-5">
                        <div class="cover-image mt-lg-5">
                            <img class="w-75 mt-5  rounded " src="{{ asset('img/daftar.webp') }}" alt="">
                        </div>

                        <div class="shape-image">
                            <img src="assets/images/auth/shape.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
