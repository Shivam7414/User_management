@extends('layouts.app')

@section('content')
    <h3 class="mt-5">Register User</h3>
    <form action="{{ url('/register') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="mb-2">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="mb-2">Mobile No.<span class="text-danger">*</span></label>
                <input type="number" name="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" value="{{ old('mobile_no') }}">
                @error('mobile_no')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="mb-2">Address<span class="text-danger">*</span></label>
                <textarea name="address" cols="30" rows="3" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="mb-2">City<span class="text-danger">*</span></label>
                <input type="text" name="city" class="form-control @error('name') is-invalid @enderror" value="{{ old('city') }}">
                @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="offset-6 col-md-6 mb-3">
                <label class="mb-2">Designation</span></label>
                <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}">
                @error('designation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="mb-2">Email<span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="mb-2">password<span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary">Register</button>
        </div>
    </form>
@endsection