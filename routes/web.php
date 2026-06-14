<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Models\Appointment;
use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

Route::get('/', function () {
    return view('home');
});

Route::get('/book-appointment', function () {
    return view('book-appointment');
});

Route::post('/book-appointment', [AppointmentController::class, 'store']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        $total = Appointment::count();
        $pending = Appointment::where('status', 'Pending')->count();
        $approved = Appointment::where('status', 'Approved')->count();
        $completed = Appointment::where('status', 'Completed')->count();
        $rejected = Appointment::where('status', 'Rejected')->count();
        $messages = \App\Models\ContactMessage::count();
        $unreadMessages = \App\Models\ContactMessage::where('is_read', false)->count();
        $last7Days = Appointment::where('created_at', '>=', Carbon::now()->subDays(7))->count();

        $last30Days = Appointment::where('created_at', '>=', Carbon::now()->subDays(30))->count();

        $popularDepartment = Appointment::selectRaw('department, COUNT(*) as total')
            ->groupBy('department')
            ->orderByDesc('total')
            ->first();

        $popularDepartment = Appointment::selectRaw('department, COUNT(*) as total')
            ->groupBy('department')
            ->orderByDesc('total')
            ->first();
        $upcomingAppointments = Appointment::whereDate('appointment_date', '>=', Carbon::today())
            ->orderBy('appointment_date', 'asc')
            ->orderBy('appointment_time', 'asc')
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'total',
            'pending',
            'approved',
            'completed',
            'rejected',
            'messages',
            'unreadMessages',
            'last7Days',
            'last30Days',
            'popularDepartment',
            'upcomingAppointments',
        ));    })->name('dashboard');

        Route::get('/staff', function () {

            if (auth()->user()->role !== 'admin') {
                abort(403);
            }

            $search = request('search');

            $staff = \App\Models\User::when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('role', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

            $totalStaff = \App\Models\User::count();
            $totalDoctors = \App\Models\User::where('role', 'doctor')->count();
            $totalNurses = \App\Models\User::where('role', 'nurse')->count();
            $totalFrontDesk = \App\Models\User::where('role', 'front_desk')->count();

            return view('staff.index', compact(
                'staff',
                'totalStaff',
                'totalDoctors',
                'totalNurses',
                'totalFrontDesk'
            ));

        });

        Route::get('/staff/{id}/edit', function ($id) {

            if (auth()->user()->role !== 'admin') {
                abort(403);
            }

            $staff = \App\Models\User::findOrFail($id);

            return view('staff.edit', compact('staff'));

        });

        Route::post('/staff/{id}/update', function ($id) {

            if (auth()->user()->role !== 'admin') {
                abort(403);
            }

            $staff = \App\Models\User::findOrFail($id);

            $staff->name = request('name');
            $staff->email = request('email');
            $staff->role = request('role');
            $staff->save();

            return redirect('/staff')->with('success', 'Staff updated successfully.');

        });

        Route::get('/staff/{id}/toggle-status', function ($id) {

            if (auth()->user()->role !== 'admin') {
                abort(403);
            }

            if (auth()->id() == $id) {
                return back()->with('error', 'You cannot disable your own account.');
            }

            $staff = \App\Models\User::findOrFail($id);
            $staff->is_active = !$staff->is_active;
            $staff->save();

            return back()->with('success', 'Staff status updated successfully.');

        });
        Route::post('/appointments/{id}/doctor-notes', function ($id) {
            $appointment = Appointment::findOrFail($id);

            $appointment->doctor_name = request('doctor_name');
            $appointment->prescription = request('prescription');
            $appointment->doctor_comment = request('doctor_comment');
            $appointment->doctor_instruction = request('doctor_instruction');
            $appointment->next_visit_date = request('next_visit_date');

            $appointment->save();

            return back()->with('success', 'Doctor notes saved successfully!');
        });

        Route::post('/appointments/{id}/billing', function ($id) {

            $appointment = Appointment::findOrFail($id);

            if (
                auth()->user()->role !== 'admin' &&
                auth()->user()->role !== 'front_desk'
            ) {
                abort(403);
            }

            $appointment->billing_amount = request('billing_amount');
            $appointment->payment_status = request('payment_status');
            $appointment->payment_note = request('payment_note');
            $appointment->next_department = request('next_department');

            $appointment->save();

            return back()->with('success', 'Billing information saved successfully!');

        });

        Route::get('/appointments/{id}/payment-receipt', function ($id) {
            $appointment = Appointment::findOrFail($id);

            return view('payment-receipt', compact('appointment'));
        });

        Route::get('/department-routing', function () {

            $routedAppointments = Appointment::whereNotNull('next_department')
                ->latest()
                ->get();

            return view('department-routing', compact('routedAppointments'));

        });

    Route::get('/appointments', function () {
        $search = request('search');

        $appointments = Appointment::when($search, function ($query, $search) {
            return $query->where('full_name', 'like', "%{$search}%")
                ->orWhere('booking_code', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%")
                ->orWhere('department', 'like', "%{$search}%");
        })->latest()->get();

        return view('appointments', compact('appointments', 'search'));
    });

    Route::get('/appointments/{id}', function ($id) {
        $appointment = Appointment::findOrFail($id);

        $medicalHistory = Appointment::where(function ($query) use ($appointment) {
                $query->where('email', $appointment->email)
                    ->orWhere('phone', $appointment->phone);
            })
            ->where('id', '!=', $appointment->id)
            ->latest()
            ->get();

        return view('appointment-details', compact('appointment', 'medicalHistory'));
    });
    Route::get('/appointments/{id}/print', function ($id) {
        $appointment = Appointment::findOrFail($id);
        return view('print-slip', compact('appointment'));
    });

    Route::get('/appointments/{id}/medical-report', function ($id) {

        $appointment = Appointment::findOrFail($id);

        return view('medical-report', compact('appointment'));

    });

    Route::get('/approve/{id}', function ($id) {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'Approved';
        $appointment->save();

        Mail::send('emails.appointment-approved', ['appointment' => $appointment], function ($message) use ($appointment) {
            $message->to($appointment->email)
                    ->subject('SmartClinic Appointment Approved');
        });

        return back();
    });

    Route::get('/complete/{id}', function ($id) {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'Completed';
        $appointment->save();

        Mail::send('emails.appointment-completed', ['appointment' => $appointment], function ($message) use ($appointment) {
            $message->to($appointment->email)
                    ->subject('SmartClinic Appointment Completed');
        });

        return back();
    });

    Route::get('/reject/{id}', function ($id) {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'Rejected';
        $appointment->save();

        Mail::send('emails.appointment-rejected', ['appointment' => $appointment], function ($message) use ($appointment) {
            $message->to($appointment->email)
                    ->subject('SmartClinic Appointment Rejected');
        });

        return back();
    });

    Route::get('/reschedule/{id}', function ($id) {
        $appointment = Appointment::findOrFail($id);

        return view('reschedule-appointment', compact('appointment'));
    });

    Route::post('/reschedule/{id}', function ($id) {
        $appointment = Appointment::findOrFail($id);

        $appointment->appointment_date = request('appointment_date');
        $appointment->appointment_time = request('appointment_time');
        $appointment->status = 'Rescheduled';
        $appointment->save();

        Mail::send('emails.appointment-rescheduled', ['appointment' => $appointment], function ($message) use ($appointment) {
            $message->to($appointment->email)
                    ->subject('SmartClinic Appointment Rescheduled');
        });

        return redirect('/appointments')->with('success', 'Appointment rescheduled successfully!');
    });

    Route::delete('/delete-appointment/{id}', function ($id) {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return back()->with('success', 'Appointment deleted successfully!');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/messages', [ContactMessageController::class, 'index'])
    ->name('admin.messages');

    Route::get('/admin/messages/{message}', [ContactMessageController::class, 'show'])
        ->name('admin.messages.show');
});

Route::get('/check-status', function () {
    return view('check-status');
});

Route::post('/check-status', function () {
    $bookingCode = request('booking_code');

    $appointment = Appointment::where('booking_code', $bookingCode)->first();

    return view('check-status-result', compact('appointment', 'bookingCode'));
});

Route::post('/contact', [ContactMessageController::class, 'store'])
    ->name('contact.store');


require __DIR__.'/auth.php';