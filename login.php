<?php
session_start();

$correct_username = 'faiz';
$correct_password = '020305';
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        header('Location: dashboard.php');
        exit();
    } else {
        $errorMessage = "<script>showPopup();</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/music.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section>
        <?php for ($i = 0; $i < 176; $i++) { echo '<span></span>'; } ?> 
    </section>
    <div class="container">
        <div class="form_area">
            <div class="music-control" id="musicControl">
                <i class="fas fa-volume-up" id="speakerIcon"></i>
            </div>
            <audio id="gameMusic" autoplay muted>
                <source src="audio/music.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <p class="title">LOGIN</p>
            <form action="login.php" method="POST" id="loginForm">
                <div class="form_group">
                    <label class="sub_title" for="username">Username</label>
                    <input placeholder="Enter your username" id="username" name="username" class="form_style" type="text" required>
                </div>
                <div class="form_group">
                    <label class="sub_title" for="password">Password</label>
                    <input placeholder="Enter your password" id="password" name="password" class="form_style" type="password" required>
                </div>
                <button type="submit" class="btn">Let's go!</button>
                <p>Didn't Have an Account? <a class="link" href="registrasi.php">Sign Up Here!</a></p>
            </form>
        </div>
    </div>

    <div id="popup" class="popup">
        Username or Password is incorrect!, Please try again.
    </div>

    <script src="JS/notif.js"></script>
    <script src="JS/music.js"></script>
    
    <?php
    if (!empty($errorMessage)) {
        echo $errorMessage;
    }
    ?>
</body>
</html>
