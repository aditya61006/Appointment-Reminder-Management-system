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
                    <td >{{ $appointment->appointment_date}}</td>
                    <td>{{ $appointment->appointment_time}}</td>
                    <td>{{ $appointment->status}}</td>
                    <td>
                        <a href="{{ route('admin.appointments.view', $appointment->id) }}" class="btn btn-info btn-sm">
                            View
                        </a>
                    </td>
                    <td><a href="{{ route('admin.appointments.edit', $appointment->id) }}"
                            class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('admin.appointments.delete', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>


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