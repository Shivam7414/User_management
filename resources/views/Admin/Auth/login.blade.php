@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center h-100 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5 bg-gray border rounded">
                    <div class="p-md-5">
                        <div class="text-center">
                            <h5>Admin Login</h5>
                        </div>
                        <form action="{{ url('admin/login') }}" method="post">
                            @csrf
                            <div class="my-3">
                                <label class="mb-2">username</label>
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" placeholder="Enter username"
                                    autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label class="mb-2">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <input type="checkbox" class="form-check-input" name="" id="remember">
                                <label for="remember">Remember me</label>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="float-end">Forgot password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
