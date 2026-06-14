<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Slip</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }

        .slip {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
        }

        @media print {
            .no-print {
                display: none;
            }

            body {
                background: white;
            }

            .slip {
                box-shadow: none;
                margin: 0;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="slip shadow">
    <div class="text-center mb-4">
        <h2 class="fw-bold">SmartClinic</h2>
        <p class="text-muted">Appointment Confirmation Slip</p>
        <hr>
    </div>

    <h5>
        Booking Code:
        <span class="badge bg-primary">{{ $appointment->booking_code }}</span>
    </h5>

    <table class="table table-bordered mt-4">
        <tr><th>Patient Name</th><td>{{ $appointment->full_name }}</td></tr>
        <tr><th>Email</th><td>{{ $appointment->email }}</td></tr>
        <tr><th>Phone</th><td>{{ $appointment->phone }}</td></tr>
        <tr><th>Gender</th><td>{{ $appointment->gender }}</td></tr>
        <tr><th>Age</th><td>{{ $appointment->age }}</td></tr>
        <tr><th>Department</th><td>{{ $appointment->department }}</td></tr>
        <tr><th>Doctor</th><td>{{ $appointment->doctor ?? 'Not specified' }}</td></tr>
        <tr><th>Date</th><td>{{ $appointment->appointment_date }}</td></tr>
        <tr><th>Time</th><td>{{ $appointment->appointment_time }}</td></tr>
        <tr><th>Status</th><td>{{ $appointment->status }}</td></tr>
        <tr><th>Reason</th><td>{{ $appointment->reason }}</td></tr>
    </table>

    <div class="text-center mt-4 no-print">
        <button onclick="window.print()" class="btn btn-primary">
            Print Now
        </button>

        <a href="/appointments/{{ $appointment->id }}" class="btn btn-secondary">
            Back
        </a>
    </div>
</div>

</body>
</html>