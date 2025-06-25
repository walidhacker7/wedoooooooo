<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Gamming Store - الصفحة الرئيسية</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Cairo', sans-serif;
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
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .description {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .btn-custom {
            padding: 15px 30px;
            font-size: 1.1rem;
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
    <div class="title">🎮 متجر Gamming Store</div>
    <div class="description">
        اشحن ألعابك، واشترِ وبيع حسابات PUBG، PES، FIFA، بطاقات Steam، Google Play والمزيد!
    </div>
    
    <div class="icon-section">
        <i class="fab fa-steam"></i>
        <i class="fab fa-google-play"></i>
        <i class="fas fa-futbol"></i>
        <i class="fas fa-gamepad"></i>
    </div>

    <div>
        <a href="login.php" class="btn btn-warning btn-custom"><i class="fas fa-sign-in-alt"></i> تسجيل الدخول</a>
        <a href="register.php" class="btn btn-outline-light btn-custom"><i class="fas fa-user-plus"></i> إنشاء حساب جديد</a>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> جميع الحقوق محفوظة لمتجر Gamming Store
</footer>

</body>
</html>
