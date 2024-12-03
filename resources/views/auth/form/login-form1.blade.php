<main class="main" id="top">
    <div class="container-fluid">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <div class="row min-vh-100 bg-100">
            <div class="col-7 d-none d-lg-block position-relative">
                <div class="bg-holder"
                    style="background-image: url('{{ asset('website/login-bg2.jpeg') }}'); background-position: 50% 20%; background-size: cover;">

                </div>
                <!--/.bg-holder-->
            </div>
            <div class="col-sm-10 col-md-5 px-sm-0 align-self-center mx-auto py-5">
                <a class="d-flex flex-center mb-4" href="#"><img class="me-2"
                        src="{{ asset('/') }}website/logo.webp" alt="" width="58" /><span
                        class="font-sans-serif text-primary fw-bolder fs-4 d-inline-block"></span> <h4>PEMA LHAMU BHUTIA</h4></a>

                <div class="row justify-content-center g-0">
                    <div class="col-lg-9 col-xl-8 col-xxl-6">
                        <div class="card login-card">
                            <div class="card-body p-4 p-sm-5">

                                <div class="row flex-between-center mb-2">

                                    <div class="m-auto" style="text-align: center">
                                        <span
                                            class="font-sans-serif text-primary fw-bolder fs-4 d-inline-block">LOGIN</span>
                                    </div>
                                    @error('ip')
                                    <span class="text-warning text-center">{{ $message }}</span>
                                @enderror
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email address" />
                                        @error('email')
                                            <span class="text-warning">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Password" />
                                        @error('password')
                                            <span class="text-warning">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="basic-checkbox" checked="checked" /><label
                                                    class="form-check-label mb-0" for="basic-checkbox">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <div class="col-auto"><a class="fs-10" href="#">Forgot
                                                Password?</a></div>
                                    </div>
                                    <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3"
                                            type="submit" name="submit">Log in</button></div>
                                </form>
                                <div class="position-relative mt-4">
                                    <hr />
                                    <div class="divider-content-center">or log in with</div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                            href="#"><span class="fab fa-google-plus-g me-2"
                                                data-fa-transform="grow-8"></span> google</a></div>
                                    <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                                            href="#"><span class="fab fa-facebook-square me-2"
                                                data-fa-transform="grow-8"></span> facebook</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
