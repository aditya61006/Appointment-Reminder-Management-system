<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-body p-4">

                        <h3 class="text-center mb-4">Admin Login</h3>
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('admin.authenticate') }}" method="POST">

                            @csrf
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email"  name="email" class="form-control" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Login
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>