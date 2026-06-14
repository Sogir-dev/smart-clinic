@extends('layouts.app')

@section('title', 'Contact Messages')

@section('content')

<div class="container py-5">

    <h2 class="mb-4">Contact Messages</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($messages as $message)

                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->full_name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>

                            <td>
                                @if($message->is_read)
                                    <span class="badge bg-success">Read</span>
                                @else
                                    <span class="badge bg-danger">Unread</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('admin.messages.show', $message->id) }}"
                                   class="btn btn-primary btn-sm">
                                    View
                                </a>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-center">
                                No messages found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

            {{ $messages->links() }}

        </div>
    </div>

</div>

@endsection