<!DOCTYPE html>
<html>
<head>
    <title>Medical Report</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            color: #222;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #111;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h3 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
        }

        .row {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
        }

        .signature {
            margin-top: 60px;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="no-print" style="margin-bottom:20px;">
        <button onclick="window.print()">Print Report</button>
    </div>

    <div class="header">
        <h1>SmartClinic</h1>
        <p>Medical Report / Prescription Slip</p>
    </div>

    <div class="section">
        <h3>Patient Information</h3>

        <div class="row"><span class="label">Patient Name:</span> {{ $appointment->full_name }}</div>
        <div class="row"><span class="label">Booking Code:</span> {{ $appointment->booking_code }}</div>
        <div class="row"><span class="label">Department:</span> {{ $appointment->department }}</div>
        <div class="row"><span class="label">Appointment Date:</span> {{ $appointment->appointment_date }}</div>
    </div>

    <div class="section">
        <h3>Doctor Report</h3>

        <div class="row"><span class="label">Doctor:</span> {{ $appointment->doctor_name ?? 'Not added' }}</div>

        <div class="row">
            <span class="label">Prescription:</span><br>
            {{ $appointment->prescription ?? 'No prescription added' }}
        </div>

        <div class="row">
            <span class="label">Doctor Comment:</span><br>
            {{ $appointment->doctor_comment ?? 'No comment added' }}
        </div>

        <div class="row">
            <span class="label">Next Visit Date:</span>
            {{ $appointment->next_visit_date ?? 'Not scheduled' }}
        </div>
    </div>

    <div class="signature">
        <p>Doctor Signature: __________________________</p>
        <p>Date: __________________________</p>
    </div>

</body>
</html>