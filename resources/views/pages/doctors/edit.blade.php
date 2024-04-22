@extends('layouts.app')

@section('title', 'Edit Doctor')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Doctors</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Doctors</h2>
                <div class="card">
                    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <input type="text"
                                    class="form-control @error('doctor_name')
                                is-invalid
                            @enderror"
                                    name="doctor_name" value="{{ $doctor->doctor_name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Doctor Specialist</label>
                                <input type="text" class="form-control @error('doctor_specialist')
                                is-invalid
                            @enderror"
                                    name="doctor_specialist" value="{{ $doctor->doctor_specialist }}">
                                @error('doctor_specialist')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text"
                                    class="form-control @error('doctor_email')
                                is-invalid
                            @enderror"
                                    name="doctor_email" value="{{ $doctor->doctor_email }}">
                                @error('doctor_email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control"
                                    name="doctor_phone" value="{{ $doctor->doctor_phone }}">
                            </div>
                            <div class="form-group">
                                <label>Sip</label>
                                <input type="number" class="form-control"
                                    name="sip" value="{{ $doctor->sip }}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control @error ('address') is-invalid @enderror"
                                    name="address" value="{{ $doctor->address }}">
                                @error('address') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" @error('photo') is-invalid @enderror"
                                    name="photo" value="{{ $doctor->photo }}">
                                @error('photo') <div class="invalid-feedback"> {{ $massage }} </div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">Role</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="role" value="Admin" class="selectgroup-input"
                                            @if ($doctor->id == 'Admin') checked @endif>
                                        <span class="selectgroup-button">Admin</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="role" value="Doctor" class="selectgroup-input"
                                            @if ($doctor->id == 'Doctor') checked @endif>
                                        <span class="selectgroup-button">Doctor</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="role" value="user" class="selectgroup-input"
                                            @if ($doctor->id == 'user') checked @endif>
                                        <span class="selectgroup-button">User</span>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
