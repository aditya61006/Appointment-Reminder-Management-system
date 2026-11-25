@extends('admin.layouts.app')

@section('content')
    <h3>Welcome to Admin Dashboard</h3>


    <p class="text-muted">
        Manage your appointments and reminders here.
    </p>

    <!-- Statistics Cards -->
    <div class="row mt-4">

        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Total Appointments</h6>
                    <h2>{{ $totalAppointments }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Today's Appointments</h6>
                    <h2>{{$todaysAppointments}}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Pending Appointments</h6>
                    <h2>{{ $pendingAppointments }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Completed Appointments</h6>
                    <h2>{{ $completedAppointments }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Recent Appointments -->
    <div class="card shadow-sm border-0 mt-4">

        <div class="card-body">

            <h5 class="mb-3">Recent Appointments</h5>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-light">

                        <tr>
                            <th>S.no.</th>
                            <th>Customer Name</th>
                            <th>Appointment Date</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                    @forelse($recentAppointments as $apmt)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$apmt->customer_name}}</td>
                            <td>{{ $apmt->appointment_date }}</td>
                            <td>{{ $apmt->appointment_time }}</td>
                            <td><span class="badge bg-warning">{{ $apmt->status }}</span></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                No appointments found.
                            </td>
                        </tr>
                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection