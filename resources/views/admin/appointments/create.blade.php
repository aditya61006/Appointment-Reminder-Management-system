@extends('admin.layouts.app')

@section('content')
    <h2>Create New Appointment</h2>

    <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary mb-3">
        ← Back to Appointments
    </a>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card p-5 m-4 shadow-sm">
    <form action="{{ route('admin.appointments.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Customer Email</label>
            <input type="email" name="customer_email" class="form-control" value="{{ old('customer_email') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Appointment Date</label>
            <input type="date" name="appointment_date" class="form-control" value="{{ old('appointment_date') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Appointment Time</label>
            <input type="time" name="appointment_time" class="form-control" value="{{ old('appointment_time') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"  >{{ old('description') }}</textarea>
        </div>
        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
            Cancel
        </a>
        <button type="submit" class="btn btn-success">
            Save Appointment
        </button>


    </form>
    </div>

@endsection