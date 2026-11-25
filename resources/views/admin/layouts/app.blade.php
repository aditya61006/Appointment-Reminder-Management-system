<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 bg-dark text-white min-vh-100 p-3">

                <h4 class="mb-4">Admin Panel</h4>

                <ul class="nav flex-column">

                    <li class="nav-item mb-3">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item mb-3">
                        <a href="{{ route('admin.appointments.index') }}" class="nav-link text-white">
                            Appointments
                        </a>
                    </li>

                    <li class="nav-item mb-3">
                        <a href="#" class="nav-link text-white">
                            Reminders
                        </a>
                    </li>

                    <li class="nav-item mb-3">
                        <a href="#" class="nav-link text-white">
                            Settings
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-4">

                <nav class="navbar navbar-light bg-white shadow-sm mb-4 px-3">

                    <span class="navbar-brand">
                        Appointment Management
                    </span>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger btn-sm">
                            Logout
                        </button>
                    </form>

                </nav>

                    <!-- dynamic main section  -->
               <div class="p-4">
                @yield('content')
               </div>



            </div>

        </div>
    </div>

</body>

</html>