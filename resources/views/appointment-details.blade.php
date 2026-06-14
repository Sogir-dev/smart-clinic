@extends('layouts.app')

@section('title', 'Appointment Details | SmartClinic')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold">Appointment Details</h2>

            <div class="d-flex flex-wrap gap-2 appointment-actions">

                <a href="/appointments" class="btn btn-secondary">
                    Back to Appointments
                </a>

                <a href="/appointments/{{ $appointment->id }}/print" class="btn btn-primary">
                    Print Slip
                </a>
                <a href="/appointments/{{ $appointment->id }}/medical-report" class="btn btn-success">
                    Print Medical Report
                </a>
                <a href="/appointments/{{ $appointment->id }}/payment-receipt"
                class="btn btn-warning">
                    Print Payment Receipt
                </a>

            </div>

        </div>

        <div class="card shadow border-0">
            <div class="card-body p-4">

                <h4 class="mb-3">
                    Booking Code:
                    <span class="badge bg-primary">
                        {{ $appointment->booking_code }}
                    </span>
                </h4>

                <hr>

                <div class="row g-4">

                    <div class="col-md-6">
                        <strong>Full Name:</strong>
                        <p>{{ $appointment->full_name }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Email:</strong>
                        <p>{{ $appointment->email }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Phone:</strong>
                        <p>{{ $appointment->phone }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Gender:</strong>
                        <p>{{ $appointment->gender }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Age:</strong>
                        <p>{{ $appointment->age }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Department:</strong>
                        <p>{{ $appointment->department }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Preferred Doctor:</strong>
                        <p>{{ $appointment->doctor ?? 'Not specified' }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Status:</strong>
                        <p>
                            <span class="badge bg-warning text-dark">
                                {{ $appointment->status }}
                            </span>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <strong>Appointment Date:</strong>
                        <p>{{ $appointment->appointment_date }}</p>
                    </div>

                    <div class="col-md-6">
                        <strong>Appointment Time:</strong>
                        <p>{{ $appointment->appointment_time }}</p>
                    </div>

                    <div class="col-12">
                        <strong>Address:</strong>
                        <p>{{ $appointment->address }}</p>
                    </div>

                    <div class="col-12">
                        <strong>Reason for Visit:</strong>
                        <p>{{ $appointment->reason }}</p>
                    </div>

                </div>

                        <div class="card shadow border-0 mt-4">
                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-3">Doctor Notes & Prescription</h4>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @php
                            $canEditDoctorNotes =
                                auth()->user()->role === 'admin' ||
                                auth()->user()->role === 'doctor';
                        @endphp

                        @if($canEditDoctorNotes)

                        <form action="{{ url('/appointments/' . $appointment->id . '/doctor-notes') }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label class="form-label">Doctor Name</label>
                                    <input type="text"
                                        name="doctor_name"
                                        class="form-control"
                                        value="{{ old('doctor_name', $appointment->doctor_name) }}"
                                        placeholder="e.g. Dr. Cash">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Next Visit Date</label>
                                    <input type="date"
                                        name="next_visit_date"
                                        class="form-control"
                                        value="{{ old('next_visit_date', $appointment->next_visit_date) }}">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Prescription</label>
                                    <textarea name="prescription"
                                            class="form-control"
                                            rows="4"
                                            placeholder="Enter prescribed drugs or treatment plan">{{ old('prescription', $appointment->prescription) }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Doctor Comment</label>
                                    <textarea name="doctor_comment"
                                            class="form-control"
                                            rows="4"
                                            placeholder="Enter doctor's observation or comment">{{ old('doctor_comment', $appointment->doctor_comment) }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Doctor Instruction</label>

                                    <textarea name="doctor_instruction"
                                            class="form-control"
                                            rows="3"
                                            placeholder="Example: Proceed to Pharmacy after payment">{{ old('doctor_instruction', $appointment->doctor_instruction) }}</textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        Save Doctor Notes
                                    </button>
                                </div>

                            </div>
                        </form>

                        @else

                        <div class="alert alert-info">
                            You can view doctor notes but only Doctors and Administrators can edit them.
                        </div>

                        @endif

                        @if($appointment->doctor_name || $appointment->prescription || $appointment->doctor_comment || $appointment->next_visit_date)

                            <hr class="my-4">

                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-dark text-white">
                                    <h5 class="mb-0">Medical Record Summary</h5>
                                </div>

                                <div class="card-body">

                                    <div class="mb-3">
                                        <strong>👨‍⚕️ Doctor</strong>
                                        <p class="mb-0">{{ $appointment->doctor_name ?? 'Not added yet' }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <strong>💊 Prescription</strong>
                                        <p class="mb-0">{{ $appointment->prescription ?? 'No prescription added yet' }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <strong>📝 Doctor Comment</strong>
                                        <p class="mb-0">{{ $appointment->doctor_comment ?? 'No comment added yet' }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <strong>➡️ Doctor Instruction</strong>
                                        <p class="mb-0">
                                            {{ $appointment->doctor_instruction ?? 'No instruction added yet' }}
                                        </p>
                                    </div>

                                    <div>
                                        <strong>📅 Next Visit Date</strong>
                                        <p class="mb-0">
                                            @if($appointment->next_visit_date)
                                                {{ \Carbon\Carbon::parse($appointment->next_visit_date)->format('d M Y') }}
                                            @else
                                                Not scheduled
                                            @endif
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="card shadow border-0 mt-4">
                            <div class="card-body">

                                <h4 class="fw-bold mb-3">Front Desk Billing & Direction</h4>
                                @php
                                    $canEditBilling =
                                        auth()->user()->role === 'admin' ||
                                        auth()->user()->role === 'front_desk';
                                @endphp

                                @if($canEditBilling)

                                <form action="/appointments/{{ $appointment->id }}/billing" method="POST">
                                    
                                    @csrf

                                    <div class="row g-3">

                                        <div class="col-md-6">
                                            <label class="form-label">Billing Amount (₦)</label>

                                            <input type="number"
                                                name="billing_amount"
                                                class="form-control"
                                                value="{{ $appointment->billing_amount }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Payment Status</label>

                                            <select name="payment_status" class="form-control">

                                                <option value="Unpaid"
                                                    {{ $appointment->payment_status == 'Unpaid' ? 'selected' : '' }}>
                                                    Unpaid
                                                </option>

                                                <option value="Paid"
                                                    {{ $appointment->payment_status == 'Paid' ? 'selected' : '' }}>
                                                    Paid
                                                </option>

                                                <option value="Pending"
                                                    {{ $appointment->payment_status == 'Pending' ? 'selected' : '' }}>
                                                    Pending
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Next Department</label>

                                            <select name="next_department" class="form-control">

                                                <option value="Pharmacy">Pharmacy</option>

                                                <option value="Laboratory">Laboratory</option>

                                                <option value="Nurse Station">Nurse Station</option>

                                                <option value="Scan Unit">Scan Unit</option>

                                                <option value="Completed">Completed</option>

                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Payment Note</label>

                                            <textarea name="payment_note"
                                                    rows="3"
                                                    class="form-control">{{ $appointment->payment_note }}</textarea>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-success">
                                                Save Billing Information
                                            </button>
                                        </div>

                                    </div>

                                </form>
                                @else

                                <div class="alert alert-info">
                                    You can view billing information but only Admin and Front Desk can edit billing.
                                </div>

                                @endif

                            </div>
                        </div>

                        @if($appointment->billing_amount)

                            <div class="card border-0 shadow-sm mt-4">

                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0">Payment Summary</h5>
                                </div>

                                <div class="card-body">

                                    <p>
                                        <strong>💰 Billing Amount:</strong>
                                        ₦{{ number_format($appointment->billing_amount, 2) }}
                                    </p>

                                    <p>
                                        <strong>💳 Payment Status:</strong>
                                        {{ $appointment->payment_status }}
                                    </p>

                                    <p>
                                        <strong>➡️ Next Department:</strong>
                                        {{ $appointment->next_department }}
                                    </p>

                                    <p>
                                        <strong>📝 Payment Note:</strong><br>
                                        {{ $appointment->payment_note }}
                                    </p>

                                </div>

                            </div>

                            @endif

                        @endif

                        <div class="card shadow border-0 mt-4">
                            <div class="card-body p-4">

                                <h4 class="fw-bold mb-3">Patient Medical History</h4>

                                @forelse($medicalHistory as $history)

                                    <div class="border rounded p-3 mb-3">
                                        <h6 class="fw-bold">
                                            Visit Date:
                                            {{ \Carbon\Carbon::parse($history->appointment_date)->format('d M Y') }}
                                        </h6>

                                        <p><strong>Department:</strong> {{ $history->department }}</p>
                                        <p><strong>Status:</strong> {{ $history->status }}</p>
                                        <p><strong>Doctor:</strong> {{ $history->doctor_name ?? 'Not recorded' }}</p>
                                        <p><strong>Prescription:</strong> {{ $history->prescription ?? 'No prescription recorded' }}</p>
                                        <p><strong>Doctor Comment:</strong> {{ $history->doctor_comment ?? 'No comment recorded' }}</p>
                                    </div>

                                @empty

                                    <p class="text-muted mb-0">
                                        No previous medical history found for this patient.
                                    </p>

                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<style>
@media(max-width:768px){

    .appointment-actions{
        display:flex !important;
        flex-direction:column !important;
        width:100%;
    }

    .appointment-actions a{
        width:100%;
        margin:0 !important;
    }

}
</style>

@endsection