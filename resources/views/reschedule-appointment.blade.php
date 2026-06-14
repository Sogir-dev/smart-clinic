@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow border-0">

                <div class="card-body p-4">

                    <h2 class="fw-bold mb-4 text-center">
                        Reschedule Appointment
                    </h2>

                    <form action="/reschedule/{{ $appointment->id }}" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                Patient Name
                            </label>

                            <input type="text"
                                   class="form-control"
                                   value="{{ $appointment->full_name }}"
                                   disabled>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Booking Code
                            </label>

                            <input type="text"
                                   class="form-control"
                                   value="{{ $appointment->booking_code }}"
                                   disabled>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                New Appointment Date
                            </label>

                            <input type="date"
                                   name="appointment_date"
                                   class="form-control"
                                   value="{{ $appointment->appointment_date }}"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                New Appointment Time
                            </label>

                            <input type="time"
                                   name="appointment_time"
                                   class="form-control"
                                   value="{{ $appointment->appointment_time }}"
                                   required>

                        </div>

                        <button type="submit"
                                class="btn btn-primary w-100">

                            Save Reschedule

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection