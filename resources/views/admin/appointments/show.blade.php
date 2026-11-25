@extends('admin.layouts.app')

@section('content')

    <h2>Appointment Details</h2>

    <div class="card p-4 shadow-sm">
        <p><strong>Customer:</strong> {{ $appointment->customer_name }}</p>
        <p><strong>Email:</strong> {{ $appointment->customer_email }}</p>
        <p><strong>Phone:</strong> {{ $appointment->phone }}</p>
        <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
        <p><strong>Time:</strong> {{ $appointment->appointment_time }}</p>
        <p><strong>Status:</strong> {{ $appointment->status }}</p>
        <p><strong>Description:</strong> {{ $appointment->description }}</p>

        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
            Back to Appointments
        </a>
    </div>

@endsection