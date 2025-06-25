<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GameHub - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Orbitron', sans-serif;
            background: url('https://wallpaperaccess.com/full/184293.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.7);
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .title {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .description {
            font-size: 1.3rem;
            margin-bottom: 40px;
        }

        .btn-custom {
            padding: 15px 30px;
            font-size: 1.2rem;
            margin: 10px;
            border-radius: 50px;
        }

        .icon-section i {
            font-size: 2.5rem;
            margin: 20px;
            color: #f1c40f;
        }

        footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #ccc;
        }
    </style>
</head>
<body>

<div class="overlay">
    <div class="title">🎮 Gammeing store </div>
    <div class="description">
        قم بشحن الألعاب، وشراء وبيع الحسابات لـ PUBG، وPES، وFIFA، وSteam، وGoogle Cards، والمزيد!
    </div>
    
    <div class="icon-section">
        <i class="fab fa-steam"></i>
        <i class="fab fa-google-play"></i>
        <i class="fas fa-futbol"></i>
        <i class="fas fa-gamepad"></i>
    </div>

    <div>
        <a href="login.php" class="btn btn-warning btn-custom"><i class="fas fa-sign-in-alt"></i> Login</a>
        <a href="register.php" class="btn btn-outline-light btn-custom"><i class="fas fa-user-plus"></i> Create Account</a>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> GameHub. All rights reserved.
</footer>

</body>
</html>
