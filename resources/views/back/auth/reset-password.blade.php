@extends('back.auth-master')

@section('title', 'Back Reset Password Page')

@section('content')


    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Reset Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @include('back.partials.auth.logo')
                        <!-- /Logo -->
                        <h4 class="mb-2">Reset Password? 🔒</h4>



                        <form id="formAuthentication" class="mb-3" action="{{ route('back.password.store') }}" method="POST">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            {{--  email  --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" value="{{ old('email', $request->email) }}" autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>

                            {{--  password  --}}
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span><br>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            {{--  password confirmation  --}}
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password_confirmaion">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span><br>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmaion')" class="mt-2" />
                            </div>

                            <button class="btn btn-primary d-grid w-100">Reset Password</button>
                        </form>
                        {{--  <div class="text-center">
                            <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to login
                            </a>
                        </div>  --}}
                    </div>
                </div>
                <!-- /Reset Password -->
            </div>
        </div>
    </div>

@endsection
