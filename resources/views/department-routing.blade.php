@extends('layouts.app')

@section('title', 'Department Routing | SmartClinic')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Department Routing Dashboard</h2>

            <a href="/dashboard" class="btn btn-secondary">
                Back to Dashboard
            </a>
        </div>

        <div class="card shadow border-0">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Booking Code</th>
                                <th>Doctor Instruction</th>
                                <th>Payment Status</th>
                                <th>Next Department</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($routedAppointments as $appointment)

                                <tr>
                                    <td>{{ $appointment->full_name }}</td>

                                    <td>
                                        <span class="badge bg-primary">
                                            {{ $appointment->booking_code }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $appointment->doctor_instruction ?? 'No instruction' }}
                                    </td>

                                    <td>
                                        @if($appointment->payment_status == 'Paid')
                                            <span class="badge bg-success">Paid</span>
                                        @elseif($appointment->payment_status == 'Pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @else
                                            <span class="badge bg-danger">Unpaid</span>
                                        @endif
                                    </td>

                                    <td>
                                        <span class="badge bg-primary">
                                            {{ $appointment->next_department }}
                                        </span>
                                    </td>

                                    <td>
                                        ₦{{ number_format($appointment->billing_amount, 2) }}
                                    </td>

                                    <td>
                                        <a href="/appointments/{{ $appointment->id }}"
                                           class="btn btn-sm btn-dark">
                                            View
                                        </a>

                                        <a href="/appointments/{{ $appointment->id }}/payment-receipt"
                                           class="btn btn-sm btn-warning">
                                            Receipt
                                        </a>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7" class="text-center text-muted">
                                        No routed patients yet.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection