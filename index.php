<?php
// ملف PHP رئيسي
$pageTitle = "Gamming Store - الصفحة الرئيسية";
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Cairo', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #1f1f1f, #3a3a3a);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .glass-container {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            padding: 50px 30px;
            max-width: 700px;
            width: 90%;
            text-align: center;
        }

        .title {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .description {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #e0e0e0;
        }

        .btn-custom {
            padding: 15px 30px;
            font-size: 1.1rem;
            margin: 10px;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background: rgba(255, 255, 255, 0.3);
            color: #000;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.4);
        }

        .icon-section i {
            font-size: 2.5rem;
            margin: 15px;
            color: #f1c40f;
        }

        footer {
            margin-top: 40px;
            color: #ccc;
            font-size: 0.9rem;
        }

        @media (max-width: 600px) {
            .title {
                font-size: 2rem;
            }

            .description {
                font-size: 1rem;
            }

            .icon-section i {
                font-size: 2rem;
                margin: 10px;
            }
        }
    </style>
</head>
<body>

<div class="glass-container">
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
        <a href="login.php" class="btn btn-custom"><i class="fas fa-sign-in-alt"></i> تسجيل الدخول</a>
        <a href="register.php" class="btn btn-custom"><i class="fas fa-user-plus"></i> إنشاء حساب جديد</a>
    </div>

    <footer>
        &copy; <?php echo $year; ?> جميع الحقوق محفوظة لمتجر Gamming Store
    </footer>
</div>

</body>
</html>
