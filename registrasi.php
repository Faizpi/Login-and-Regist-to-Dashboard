<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$popupMessage = '';
$isError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        $_SESSION['users'] = [];
        $popupMessage = 'All users have been reset.';
        $isError = false;
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        $emailExists = false;

        foreach ($_SESSION['users'] as $user) {
            if ($user['email'] === $email) {
                $emailExists = true;
                break;
            }
        }

        if ($emailExists) {
            $popupMessage = 'Email is already in use. Please choose another one.';
            $isError = true;
        } elseif ($password !== $confirmPassword) {
            $popupMessage = 'Passwords do not match.';
            $isError = true;
        } else {
            $_SESSION['users'][] = [
                'name' => $name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT) 
            ];
            $popupMessage = 'Registration successful!';
            $isError = false;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/registrasi.css">
    <script src="JS/popup.js" defer></script>
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
            <p class="title">SIGN UP</p>
            <form id="registrasiForm" method="POST">
                <div class="form_group">
                    <label class="sub_title" for="name">Name</label>
                    <input placeholder="Enter your full name" id="name" class="form_style" type="text" name="name" required>
                </div>
                <div class="form_group">
                    <label class="sub_title" for="email">Email</label>
                    <input placeholder="Enter your email" id="email" class="form_style" type="email" name="email" required>
                </div>
                <div class="form_group">
                    <label class="sub_title" for="password">Password</label>
                    <input placeholder="Enter your password" id="password" class="form_style" type="password" name="password" required>
                </div>
                <div class="form_group">
                    <label class="sub_title" for="confirm_password">Confirm Password</label>
                    <input placeholder="Confirm your password" id="confirm_password" class="form_style" type="password" name="confirm_password" required>
                </div>
                <div>
                    <button type="submit" class="btn">Confirm!</button>
                    <p>Have an Account? <a class="link" href="login.php">Login Here!</a></p>
                </div>
            </form>
            <button type="button" onclick="resetUsers()" class="reset-btn">RESET USERS</button>
        </div>
    </div>

    <div id="popup" class="popup"></div>

    <script>
        window.onload = function() {
            const message = '<?php echo addslashes($popupMessage); ?>';
            const isError = <?php echo json_encode($isError); ?>; 
            if (message) {
                showPopup(message, isError);
            }
        }
    </script>
    <script src="JS/music.js"></script>
</body>
</html>
