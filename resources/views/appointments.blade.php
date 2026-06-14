@extends('layouts.app')

@section('title', 'All Appointments')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold">All Appointments</h2>

            <a href="/book-appointment" class="btn btn-primary">
                Book New Appointment
            </a>

        </div>

        <form action="/appointments" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text"
                    name="search"
                    value="{{ $search ?? '' }}"
                    class="form-control"
                    placeholder="Search by name, booking code, phone, or department">

                <button class="btn btn-dark" type="submit">
                    Search
                </button>

                <a href="/appointments" class="btn btn-secondary">
                    Reset
                </a>
            </div>
        </form>
                @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        <div class="card shadow border-0">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle">

                        <thead class="table-dark">

                            <tr>
                                <th>ID</th>
                                <th>Booking Code</th>
                                <th>Patient Name</th>
                                <th>Department</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($appointments as $appointment)

                                <tr>

                                    <td>{{ $appointment->id }}</td>

                                    <td>
                                        <span class="badge bg-primary">
                                            {{ $appointment->booking_code }}
                                        </span>
                                    </td>

                                    <td>{{ $appointment->full_name }}</td>

                                    <td>{{ $appointment->department }}</td>

                                    <td>{{ $appointment->appointment_date }}</td>

                                    <td>
                                        @if($appointment->status == 'Pending')

                                            <span class="badge bg-warning text-dark">
                                                {{ $appointment->status }}
                                            </span>

                                        @elseif($appointment->status == 'Approved')

                                            <span class="badge bg-success">
                                                {{ $appointment->status }}
                                            </span>

                                        @elseif($appointment->status == 'Completed')

                                            <span class="badge bg-primary">
                                                {{ $appointment->status }}
                                            </span>

                                        @else

                                            <span class="badge bg-danger">
                                                {{ $appointment->status }}
                                            </span>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="/appointments/{{ $appointment->id }}" class="btn btn-dark btn-sm">
                                            View
                                        </a>

                                        <a href="/approve/{{ $appointment->id }}" class="btn btn-success btn-sm">
                                            Approve
                                        </a>

                                        <a href="/reschedule/{{ $appointment->id }}" class="btn btn-warning btn-sm">
                                            Reschedule
                                        </a>

                                        <a href="/complete/{{ $appointment->id }}" class="btn btn-primary btn-sm">
                                            Complete
                                        </a>

                                        <a href="/reject/{{ $appointment->id }}" class="btn btn-danger btn-sm">
                                            Reject
                                        </a>

                                        <form action="/delete-appointment/{{ $appointment->id }}" method="POST" class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-dark btn-sm"
                                                    onclick="return confirm('Delete this appointment?')">

                                                Delete

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="text-center">
                                        No appointments found.
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