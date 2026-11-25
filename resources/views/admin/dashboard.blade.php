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
                <h2>120</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Today's Appointments</h6>
                <h2>15</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Pending Appointments</h6>
                <h2>35</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Completed Appointments</h6>
                <h2>70</h2>
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

                    <tr>
                        <td>1</td>
                        <td>Rahul</td>
                        <td>2026-11-24</td>
                        <td>10:00 AM</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Amit</td>
                        <td>2026-11-24</td>
                        <td>12:00 PM</td>
                        <td><span class="badge bg-success">Completed</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Priya</td>
                        <td>2026-11-25</td>
                        <td>03:00 PM</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection