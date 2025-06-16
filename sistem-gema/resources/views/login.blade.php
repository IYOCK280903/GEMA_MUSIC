
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Gema Music School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: 
                linear-gradient(135deg, rgba(0,8,255,0.85) 0%, rgba(18,145,249,0.85) 100%),
                url('{{ asset('images/bg-login.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .navbar-custom {
            background-color: #2a237e;
        }
        .btn-yellow {
            background-color: #ffca28;
            color: black;
            font-weight: bold;
        }
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgb(1, 10, 129);
            background: rgba(255,255,255,0.95);
        }
        .card-header {
            background-color: rgb(0, 27, 109);
            color: #fff;
            border-bottom: none;
            border-radius: 16px 16px 0 0;
        }
        .btn-primary {
            background-color:rgba(244, 232, 6, 0.93);
            border: none;
        }
        .btn-primary:hover {
            background-color:rgb(0, 14, 105);
        }
    </style>
</head>
<body>
<!-- Login Card -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow" style="width: 350px;">
        <div class="card-header text-center">
            <h3 class="mb-0">Login</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="#">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="mt-3 text-center">
                <a href="{{ url('/register') }}" class="text-primary">Belum punya akun? ayo daftar</a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>