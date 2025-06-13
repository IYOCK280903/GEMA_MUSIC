
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GEMA MUSIC SCHOOL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2196f3 0%, #90caf9 100%);
            min-height: 100vh;
        }
        .center-box {
            background: rgba(255,255,255,0.95);
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            padding: 48px 32px;
        }
        .title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1976d2;
            letter-spacing: 2px;
        }
        .logo-img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 16px;
        }
        .school-photo {
            width: 100%;
            max-width: 350px;
            border-radius: 12px;
            margin-top: 24px;
            box-shadow: 0 4px 16px rgba(33,150,243,0.15);
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="center-box text-center">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo Gema Music School" class="logo-img">
            <div class="title mb-3">GEMA MUSIC SCHOOL</div>
            <!-- Foto sekolah -->
            <img src="{{ asset('images/school.jpg') }}" alt="Foto Gema Music School" class="school-photo">
        </div>
    </div>
</body>
</html>