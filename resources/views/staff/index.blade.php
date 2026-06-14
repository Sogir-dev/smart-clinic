@extends('layouts.app')

@section('title', 'Staff Management | SmartClinic')

@section('content')

<section class="py-5" style="background:#f8fafc;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Staff Management</h2>
                <p class="text-muted mb-0">
                    View all registered SmartClinic staff members.
                </p>
            </div>

            <a href="/register" class="btn btn-primary">
                + Add New Staff
            </a>
        </div>

        <div class="row g-4 mb-4">

            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Total Staff</h6>
                        <h2 class="fw-bold">{{ $totalStaff }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Doctors</h6>
                        <h2 class="fw-bold text-primary">{{ $totalDoctors }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Nurses</h6>
                        <h2 class="fw-bold text-info">{{ $totalNurses }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Front Desk</h6>
                        <h2 class="fw-bold text-success">{{ $totalFrontDesk }}</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">

                <form method="GET" action="{{ url('/staff') }}">

                    <div class="row g-2">

                        <div class="col-md-10">
                            <input
                                type="text"
                                name="search"
                                class="form-control"
                                placeholder="Search by name, email or role..."
                                value="{{ request('search') }}">
                        </div>

                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">
                                Search
                            </button>
                        </div>

                    </div>

                </form>

            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover align-middle">

                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($staff as $user)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $user->name }}
                                    </td>

                                    <td>
                                        {{ $user->email }}
                                    </td>

                                    <td>
                                        @if($user->role == 'admin')
                                            <span class="badge bg-dark">Admin</span>
                                        @elseif($user->role == 'doctor')
                                            <span class="badge bg-primary">Doctor</span>
                                        @elseif($user->role == 'front_desk')
                                            <span class="badge bg-success">Front Desk</span>
                                        @elseif($user->role == 'nurse')
                                            <span class="badge bg-info text-dark">Nurse</span>
                                        @else
                                            <span class="badge bg-secondary">
                                                {{ $user->role }}
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        {{ $user->created_at->format('d M Y') }}
                                    </td>

                                    <td>

                                        <a href="/staff/{{ $user->id }}/edit"
                                        class="btn btn-sm btn-primary">
                                            Edit
                                        </a>

                                        @if($user->id !== auth()->id())

                                            <a href="/staff/{{ $user->id }}/toggle-status"
                                            class="btn btn-sm {{ $user->is_active ? 'btn-warning' : 'btn-success' }}">
                                            
                                            {{ $user->is_active ? 'Disable' : 'Enable' }}

                                            </a>

                                        @else

                                            <button class="btn btn-sm btn-secondary" disabled>
                                                Your Account
                                            </button>

                                        @endif

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        No staff registered yet.
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