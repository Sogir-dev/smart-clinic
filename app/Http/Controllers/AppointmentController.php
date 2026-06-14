<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'gender' => 'required',
            'age' => 'required|integer|min:1',
            'department' => 'required',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'address' => 'required|string',
            'reason' => 'required|string',
        ]);

        do {
            $bookingCode = 'SC-' . strtoupper(substr(md5(uniqid()), 0, 6));
        } while (Appointment::where('booking_code', $bookingCode)->exists());

        $appointment = Appointment::create([

            'booking_code' => $bookingCode,

            'full_name' => $request->full_name,

            'email' => $request->email,

            'phone' => $request->phone,

            'gender' => $request->gender,

            'age' => $request->age,

            'department' => $request->department,

            'doctor' => $request->doctor,

            'appointment_date' => $request->appointment_date,

            'appointment_time' => $request->appointment_time,

            'address' => $request->address,

            'reason' => $request->reason,
        ]);
        $appointment = Appointment::latest()->first();

        Mail::send(
            'emails.appointment-confirmation',
            ['appointment' => $appointment],
            function ($message) use ($appointment) {
                $message->to($appointment->email)
                        ->subject('SmartClinic Appointment Confirmation');
            }
        );

        return back()
            ->with('success', 'Appointment booked successfully!')
            ->with('booking_code', $bookingCode);
    }
}