@extends('layouts.app')

@section('title', 'Dashboard | SmartClinic')

@section('content')

<section class="py-5" style="background:#f8fafc;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Admin Dashboard</h2>
                <p class="text-muted mb-0">
                    Welcome back, {{ Auth::user()->name }}. Manage SmartClinic operations from here.
                </p>
            </div>

            <span class="badge bg-primary px-3 py-2">
                {{ ucfirst(str_replace('_', ' ', Auth::user()->role)) }}
            </span>
        </div>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <div class="d-flex flex-wrap gap-3">
                    <a href="/book-appointment" class="btn btn-primary">+ Book Appointment</a>
                    <a href="/appointments" class="btn btn-dark">View Appointments</a>
                    <a href="/department-routing" class="btn btn-success">Department Routing</a>
                    <a href="{{ route('admin.messages') }}" class="btn btn-warning">Messages</a>
                    <a href="/" class="btn btn-secondary">Back Home</a>
                </div>
            </div>
        </div>

        <h5 class="fw-bold mb-3">Appointment Overview</h5>

        <div class="row g-4 mb-4">

            <div class="col-lg-4 col-md-6">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <span class="dashboard-icon">📅</span>
                        <h6>Total Appointments</h6>
                        <h2>{{ $total }}</h2>
                        <p>All booked appointments</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <span class="dashboard-icon">⏳</span>
                        <h6>Pending</h6>
                        <h2 class="text-warning">{{ $pending }}</h2>
                        <p>Awaiting admin action</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <span class="dashboard-icon">✅</span>
                        <h6>Approved</h6>
                        <h2 class="text-success">{{ $approved }}</h2>
                        <p>Confirmed appointments</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <span class="dashboard-icon">🏁</span>
                        <h6>Completed</h6>
                        <h2 class="text-primary">{{ $completed }}</h2>
                        <p>Appointments completed</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <span class="dashboard-icon">❌</span>
                        <h6>Rejected</h6>
                        <h2 class="text-danger">{{ $rejected }}</h2>
                        <p>Appointments rejected</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="{{ route('admin.messages') }}" class="text-decoration-none text-dark">
                    <div class="card dashboard-card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <span class="dashboard-icon">💬</span>
                            <h6>Contact Messages</h6>
                            <h2 class="text-primary">{{ $messages }}</h2>
                            <p>Messages from website visitors</p>

                            @if($unreadMessages > 0)
                                <span class="badge bg-danger">{{ $unreadMessages }} unread</span>
                            @else
                                <span class="badge bg-success">All read</span>
                            @endif
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <h5 class="fw-bold mb-3">Analytics</h5>

        <div class="row g-4 mb-4">

            <div class="col-md-4">
                <div class="card analytics-card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <h6>Last 7 Days</h6>
                        <h2 class="text-primary">{{ $last7Days }}</h2>
                        <p>Recent appointment activity</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card analytics-card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <h6>Last 30 Days</h6>
                        <h2 class="text-success">{{ $last30Days }}</h2>
                        <p>Monthly appointment activity</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card analytics-card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <h6>Popular Department</h6>

                        @if($popularDepartment)
                            <h4 class="text-info fw-bold">
                                {{ $popularDepartment->department }}
                            </h4>
                            <p>{{ $popularDepartment->total }} bookings</p>
                        @else
                            <p>No appointments yet</p>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h4 class="fw-bold mb-1">Upcoming Appointments</h4>
                        <p class="text-muted mb-0">Next scheduled patient visits.</p>
                    </div>

                    <a href="/appointments" class="btn btn-sm btn-primary">
                        View All
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">

                        <thead class="table-light">
                            <tr>
                                <th>Patient</th>
                                <th>Department</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($upcomingAppointments as $appointment)
                                <tr>
                                    <td class="fw-semibold">{{ $appointment->full_name }}</td>
                                    <td>{{ $appointment->department }}</td>
                                    <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y') }}</td>
                                    <td>{{ $appointment->appointment_time }}</td>
                                    <td>
                                        @if($appointment->status == 'Pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($appointment->status == 'Approved')
                                            <span class="badge bg-success">Approved</span>
                                        @elseif($appointment->status == 'Rejected')
                                            <span class="badge bg-danger">Rejected</span>
                                        @elseif($appointment->status == 'Completed')
                                            <span class="badge bg-primary">Completed</span>
                                        @else
                                            <span class="badge bg-info">{{ $appointment->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">
                                        No upcoming appointments found.
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

<style>
    .dashboard-card{
        border-radius:18px;
        transition:.3s ease;
    }

    .dashboard-card:hover{
        transform:translateY(-5px);
        box-shadow:0 15px 35px rgba(0,0,0,.10) !important;
    }

    .dashboard-card h6,
    .analytics-card h6{
        font-weight:700;
        margin-top:12px;
        margin-bottom:10px;
        color:#111827;
    }

    .dashboard-card h2,
    .analytics-card h2{
        font-size:38px;
        font-weight:800;
        margin-bottom:8px;
    }

    .dashboard-card p,
    .analytics-card p{
        color:#6c757d;
        margin-bottom:0;
        font-size:15px;
    }

    .dashboard-icon{
        width:48px;
        height:48px;
        border-radius:14px;
        background:#eef5ff;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:24px;
    }

    .analytics-card{
        border-radius:18px;
    }

    @media(max-width:768px){
        .d-flex.justify-content-between{
            flex-direction:column;
            align-items:flex-start !important;
            gap:15px;
        }

        .dashboard-card h2,
        .analytics-card h2{
            font-size:30px;
        }
    }
</style>

@endsection