@extends('layouts.app')

@section('title', 'Edit Staff | SmartClinic')

@section('content')

<section class="py-5" style="background:#f8fafc;">
    <div class="container">

        <div class="mb-4">
            <h2 class="fw-bold">Edit Staff</h2>
            <p class="text-muted">Update staff name, email, and role.</p>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <form method="POST" action="/staff/{{ $staff->id }}/update">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control"
                               value="{{ $staff->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control"
                               value="{{ $staff->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select name="role" class="form-control">
                            <option value="admin" {{ $staff->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="doctor" {{ $staff->role == 'doctor' ? 'selected' : '' }}>Doctor</option>
                            <option value="nurse" {{ $staff->role == 'nurse' ? 'selected' : '' }}>Nurse</option>
                            <option value="front_desk" {{ $staff->role == 'front_desk' ? 'selected' : '' }}>Front Desk</option>
                        </select>
                    </div>

                    <button class="btn btn-primary">
                        Update Staff
                    </button>

                    <a href="/staff" class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>
        </div>

    </div>
</section>

@endsection