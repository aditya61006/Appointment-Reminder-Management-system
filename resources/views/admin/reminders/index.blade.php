@extends('admin.layouts.app')

@section('content')

    <h2>Reminder Management</h2>

    <a href="{{ route('admin.reminders.create') }}" class="btn btn-primary mb-3">
        + Create Reminder
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Appointment Date</th>
                <th>Reminder Time</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse($reminders as $reminder)
                <tr>
                    <td>{{ $reminder->id }}</td>
                    <td>{{ $reminder->appointment->customer_name }}</td>
                    <td>{{ $reminder->appointment->appointment_date }}</td>
                    <td>{{ $reminder->reminder_at }}</td>
                    <td>{{ $reminder->message }}</td>
                    <td>{{ ucfirst($reminder->status) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        No reminders found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection