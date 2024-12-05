@extends('layouts.app')

@section('main')
    <div class="container">

        <section class="py-4 section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="py-4 d-flex justify-content-center">
                            <a href="index.html" class="w-auto logo d-flex align-items-center">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block"></span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="mb-3 card">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="pb-0 text-center card-title fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>

                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <form class="row g-3 needs-validation" novalidate action="{{ route('auth') }}"
                                    method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="email" value="{{ old('email') }}"
                                                class="form-control" id="yourUsername" required>
                                            <div class="invalid-feedback">Please enter your email.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                            required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                    {{-- <div class="col-12">
                                            <p class="mb-0 small">Don't have account? <a href="pages-register.html">Create
                                                    an account</a></p>
                                        </div> --}}
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
