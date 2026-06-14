<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Appointment Rescheduled</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f4f4; padding:30px;">
    <div style="max-width:600px; margin:auto; background:white; border-radius:10px; overflow:hidden; box-shadow:0 0 10px rgba(0,0,0,0.1);">
        <div style="background:#ffc107; color:#212529; padding:20px; text-align:center;">
            <h1 style="margin:0;">SmartClinic</h1>
            <p style="margin:5px 0 0;">Appointment Rescheduled</p>
        </div>

        <div style="padding:30px;">
            <h3>Hello {{ $appointment->full_name }},</h3>

            <p>Your appointment has been rescheduled by the clinic.</p>

            <div style="background:#f8f9fa; padding:20px; border-radius:8px; margin:20px 0;">
                <p><strong>Booking Code:</strong>
                    <span style="background:#ffc107; color:#212529; padding:5px 10px; border-radius:5px;">
                        {{ $appointment->booking_code }}
                    </span>
                </p>

                <p><strong>Department:</strong> {{ $appointment->department }}</p>
                <p><strong>New Date:</strong> {{ $appointment->appointment_date }}</p>
                <p><strong>New Time:</strong> {{ $appointment->appointment_time }}</p>

                <p><strong>Status:</strong>
                    <span style="background:#ffc107; color:#212529; padding:5px 10px; border-radius:5px;">
                        Rescheduled
                    </span>
                </p>
            </div>

            <p>Please check your new appointment date and time carefully.</p>
        </div>

        <div style="background:#212529; color:white; text-align:center; padding:15px;">
            SmartClinic © 2026
        </div>
    </div>
</body>
</html>