@extends('layouts.app')

@section('title', 'Appointment Status Result | SmartClinic')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="card shadow border-0 mx-auto" style="max-width: 700px;">
            <div class="card-body p-4">

                @if($appointment)

                    <h3 class="fw-bold mb-3">Appointment Found</h3>

                    <p>
                        <strong>Booking Code:</strong>
                        <span class="badge bg-primary">{{ $appointment->booking_code }}</span>
                    </p>

                    <p><strong>Name:</strong> {{ $appointment->full_name }}</p>
                    <p><strong>Department:</strong> {{ $appointment->department }}</p>
                    <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
                    <p><strong>Time:</strong> {{ $appointment->appointment_time }}</p>

                    <p>
                        <strong>Status:</strong>

                        @if($appointment->status == 'Pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif($appointment->status == 'Approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($appointment->status == 'Completed')
                            <span class="badge bg-primary">Completed</span>
                        @else
                            <span class="badge bg-danger">Rejected</span>
                        @endif
                    </p>

                    <a href="/check-status" class="btn btn-secondary mt-3">
                        Check Another
                    </a>

                @else

                    <div class="alert alert-danger">
                        No appointment found with booking code:
                        <strong>{{ $bookingCode }}</strong>
                    </div>

                    <a href="/check-status" class="btn btn-secondary">
                        Try Again
                    </a>

                @endif

            </div>
        </div>

    </div>
</section>

@endsection