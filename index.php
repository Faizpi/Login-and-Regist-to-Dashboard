<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/music.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section>
        <?php for ($i = 0; $i < 176; $i++) { echo '<span></span>'; } ?>
    </section>
    <div class="container">
        <div class="music-control" id="musicControl">
            <i class="fas fa-volume-up" id="speakerIcon"></i>
        </div>

        <audio id="gameMusic" autoplay muted>
            <source src="audio/music.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <p class="title">WELCOME</p>
        <a href="login.php" class="button">LOGIN</a>
        <a href="registrasi.php" class="button">REGISTRASI</a>
        <div class="text">Atau Daftar Dengan:</div>
        <div class="social">
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook"></a>
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1024px-Google_%22G%22_logo.svg.png" alt="Google"></a>
        </div>
        <div class="footer">© @faiz_pratama02</div>
    </div>
    <script src="JS/music.js"></script>
</body>
</html>
