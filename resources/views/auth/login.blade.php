<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #f9f1e9;
            font-family: Arial, sans-serif;
            color: #a67c52;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
            color: #a67c52;
        }

        .form-subtitle {
            text-align: center;
            margin-bottom: 20px;
            color: #6b695f;
        }

        .form-label {
            color: #a67c52;
        }

        .btn-custom {
            background-color: #a67c52;
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #8c6245;
            color: #ffffff;
        }

        .back-link {
            text-align: center;
            display: block;
            margin-top: 10px;
            color: #a67c52;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .acme-regular {
            font-family: "Acme", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .inter {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2 class="form-title acme-regular">Login</h2>
        <p class="form-subtitle inter">Silahkan masukkan email dan password Anda yang telah terdaftar.</p>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label inter">Email :</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"
                    required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label inter">Password :</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Enter your password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-custom inter">Login</button>
            </div>
            <a href="{{ url('/') }}" class="back-link inter">&lt; Back to Home</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
