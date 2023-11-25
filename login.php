<?php
include("include/config.php");
include("include/functions.php");
$page = "Login";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRating</title>
    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="css/loginStyle.css">
    <script src="JavaScript/loginScript.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100&family=Athiti:wght@200&family=Chakra+Petch:ital,wght@0,300;1,300&family=Charm&family=IBM+Plex+Sans+Thai+Looped:wght@100&family=IBM+Plex+Sans+Thai:wght@100&family=K2D:wght@100&family=Kanit:wght@100&family=Krub:wght@200&family=Maitree:wght@200&family=Mitr:wght@200&family=Noto+Sans+Thai+Looped:wght@100&family=Noto+Serif+Thai:wght@100&family=Pridi:wght@200&family=Sarabun:wght@100&family=Taviraj:wght@300&display=swap" rel="stylesheet">

    <html data-theme="dracula">
</head>

<body class="text-white">
    <?php include('include/topbar.php'); ?>

    <div class="container">
        <div class="login">
            <h2 class="mb-10 mt-6">เข้าสู่ระบบ</h2>
            <form method="post" action="login_action.php">
                <div class="input-container mb-6">
                    <label for="email" class="mb-2">
                        อีเมล
                    </label>
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                </div>
                <div class="input-container mb-6">
                    <label for="password" class="mb-2">
                        รหัสผ่าน
                    </label>
                    <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่านของคุณ">
                </div>
                <div class="remember-forgot mb-6">
                    <div class="forgot-password">
                        <a href="forGotPasslogout.php" class="forgot-password-link">ลืมรหัสผ่าน?</a>
                    </div>
                </div>
                <button type="button" class="login-button-form btn" onclick="handleLogin()">เข้าสู่ระบบ</button>
            </form>
            <div class="signup-link mb-4 mt-6">
                <span>ยังไม่มีบัญชีใช่หรือไม่?</span>
                <a href="CreateUser.php" class="signup ">สมัครสมาชิก</a>
            </div>
        </div>
    </div>

    <?php include('include/buttombar.php'); ?>
</body>

</html>