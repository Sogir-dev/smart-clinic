@extends('layouts.app')

@section('title', 'Check Appointment Status | SmartClinic')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Check Appointment Status</h2>
            <p class="text-muted">Enter your booking code to view your appointment status.</p>
        </div>

        <div class="card shadow border-0 mx-auto" style="max-width: 600px;">
            <div class="card-body p-4">
                <form action="/check-status" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Booking Code</label>
                        <input type="text" name="booking_code" class="form-control" placeholder="Example: SC-1876" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Check Status
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection