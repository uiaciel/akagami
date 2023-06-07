@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column">
        <div class="row justify-content-center
        min-vh-100 mt-5">
            <div class="col-12 col-lg-6 col-md-12 py-8 py-xl-0">
                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid p-6" alt="Welcome.." />
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="../index.html"><img src="../assets/images/brand/logo/logo-primary.svg" class="mb-2"
                                    alt=""></a>
                            <p class="mb-6">Please enter your user information.</p>

                        </div>


                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Role</label>


                                <select class="form-select" name="role" aria-label="Default select example">
                                    <option selected>Pilih Role</option>
                                    <option value="Crew">Crew</option>
                                    <option value="Client">Client</option>
                                    <option value="Admin">Admin</option>
                                </select>

                            </div>
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm
                                    Password</label>

                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">


                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck">
                                    <label class="form-check-label" for="agreeCheck"><span class="fs-5">I agree to the
                                            <a href="terms-condition-page.html">Terms of
                                                Service </a>and
                                            <a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        <a href="sign-up.html" class="fs-5">Already
                                            member? Login </a>
                                    </div>
                                    <div>
                                        <a href="forget-password.html"
                                            class="text-inherit
                        fs-5">Forgot your password?</a>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
