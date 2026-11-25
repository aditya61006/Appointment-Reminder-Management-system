@extends('admin.layouts.app')

@section('content')

    <h2>Edit Appointment</h2>

    <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary mb-3">
        ← Back to Appointments
    </a>

    <div class="card p-4 shadow-sm">

        <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" name="customer_name" class="form-control" value="{{ $appointment->customer_name }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Customer Email</label>
                <input type="email" name="customer_email" class="form-control" value="{{ $appointment->customer_email }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{ $appointment->phone }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Appointment Date</label>
                <input type="date" name="appointment_date" class="form-control" value="{{ $appointment->appointment_date }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Appointment Time</label>
                <input type="time" name="appointment_time" class="form-control " value="{{ $appointment->appointment_time }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $appointment->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">
                Update Appointment
            </button>

        </form>

    </div>

@endsection