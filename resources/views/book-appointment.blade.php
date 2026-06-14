@extends('layouts.app')

@section('title', 'Book Appointment | SmartClinic')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Book an Appointment</h2>
            <p class="text-muted">Fill the form below to request a clinic appointment.</p>
        </div>

        <div class="card shadow border-0">
            <div class="card-body p-4">

                @if(session('success'))

                    <div class="alert alert-success shadow-sm border-0">

                        <h5 class="fw-bold mb-3">
                            {{ session('success') }}
                        </h5>

                        @if(session('booking_code'))

                            <p class="mb-1">
                                Your booking code is:
                            </p>

                            <h3>
                                <span class="badge bg-primary p-2">
                                    {{ session('booking_code') }}
                                </span>
                            </h3>

                            <p class="mt-2 mb-0">
                                Please save this booking code carefully.
                                You will use it to check your appointment status later.
                            </p>

                        @endif

                    </div>

                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/book-appointment" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option selected disabled>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Age</label>
                            <input type="number" name="age" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Department</label>
                            <select name="department" class="form-select">
                                <option selected disabled>Select department</option>
                                <option value="General Consultation">General Consultation</option>
                                <option value="Dental Care">Dental Care</option>
                                <option value="Eye Clinic">Eye Clinic</option>
                                <option value="Laboratory">Laboratory</option>
                                <option value="Pharmacy">Pharmacy</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Preferred Doctor</label>
                            <input type="text" name="doctor" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Appointment Date</label>
                            <input type="date" name="appointment_date" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Appointment Time</label>
                            <input type="time" name="appointment_time" class="form-control">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Reason for Visit</label>
                            <textarea name="reason" class="form-control" rows="4" placeholder="Briefly describe reason for appointment"></textarea>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5 py-2">
                                Submit Appointment
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection