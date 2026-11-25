@extends('admin.layouts.app')
@section('content')


  <h2>Appointments List</h2>
  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif

<a href="{{ route('admin.appointments.create') }}" class="btn btn-primary mb-3">
    + Create Appointment
</a>

  <table class="table table-bordered table-striped mt-3 ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th colspan="2">Actions</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id}}</td>
                <td>{{ $appointment->customer_name }}</td>
                <td>{{ $appointment->customer_email }}</td>
                <td>{{ $appointment->phone }}</td>
                <td>{{ $appointment->appointment_date}}</td>
                <td>{{ $appointment->appointment_time}}</td>
                <td>{{ $appointment->status}}</td>
                <td>Edit</td>
                <td>Cancel</td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">
                    No appointments found!
                </td>
            </tr>
        @endforelse
    </tbody>

  </table>


@endsection