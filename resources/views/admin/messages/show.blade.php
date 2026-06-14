@extends('layouts.app')

@section('title', 'View Message')

@section('content')

<div class="container py-5">

    <div class="card shadow">

        <div class="card-header">
            <h3>Message Details</h3>
        </div>

        <div class="card-body">

            <p>
                <strong>Name:</strong>
                {{ $message->full_name }}
            </p>

            <p>
                <strong>Email:</strong>
                {{ $message->email }}
            </p>

            <p>
                <strong>Subject:</strong>
                {{ $message->subject }}
            </p>

            <hr>

            <h5>Message</h5>

            <p>
                {{ $message->message }}
            </p>

            <a href="{{ route('admin.messages') }}"
               class="btn btn-secondary">
               Back
            </a>

        </div>

    </div>

</div>

@endsection