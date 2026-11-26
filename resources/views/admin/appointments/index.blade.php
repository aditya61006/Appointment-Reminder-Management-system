@extends('admin.layouts.app')
@section('content')


    <h2>Appointments List</h2>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.appointments.create') }}" class="btn btn-primary mb-3">
        + Create Appointment
    </a>
    <form action="{{ route('admin.appointments.index') }}" method="GET" class="mb-3">
        <div class="row g-2">

            <!-- searchbar -->
            <div class="col-md-6">
                <input type="text" name="search" class="form-control" placeholder="Search by customer name or email"
                    value="{{ request('search') }}">
            </div>

            <!-- status options -->
            <div class="col-md-3">
                <select name="status" class="form-select">
                    <option value="">All Statuses</option>

                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>
                        Pending
                    </option>

                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>
                        Completed
                    </option>

                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>
                        Cancelled
                    </option>
                </select>
            </div>

            <!-- search buttons   -->
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">
                    Search
                </button>

                <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
                    Reset
                </a>
            </div>

        </div>
    </form>

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
                <th colspan="3" class="">Actions</th>

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
                    <td>
                        @if($appointment->status == 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif($appointment->status == 'completed')
                            <span class="badge bg-success">Completed</span>
                        @elseif($appointment->status == 'cancelled')
                            <span class="badge bg-danger">Cancelled</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.appointments.view', $appointment->id) }}" class="btn btn-info btn-sm">
                            View
                        </a>
                    </td>
                    <td><a href="{{ route('admin.appointments.edit', $appointment->id) }}"
                            class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('admin.appointments.delete', $appointment->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this appointment?')">
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

    <div class="mt-3">
        {{ $appointments->links() }}
    </div>

@endsection