<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Games Dashboard</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="stylesheet" href="styles/music.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section>
        <?php for ($i = 0; $i < 176; $i++) { echo '<span></span>'; } ?>
    </section>

    <div class="container">
        <div class="logout">
            <a href="index.php" style="text-decoration: none;">
                <button class="button">Logout</button>
            </a>
        </div>
        <h1>Mini Games Dashboard</h1>
        <div class="welcome">Welcome Faiz! Ready to play some games?</div>

        <div class="music-control" id="musicControl">
            <i class="fas fa-volume-up" id="speakerIcon"></i>
        </div>

        <audio id="gameMusic" autoplay muted>
            <source src="audio/music.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div class="game-list">
            <div class="game-item">
                <h2>Game 1</h2>
                <img src="img/game1.jpg" alt="Preview Game 1">
                <p>Tic Tac Toe</p>
                <a href="https://www.friv.com/z/games/tictactoexxo/game.html" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
            <div class="game-item">
                <h2>Game 2</h2>
                <img src="img/game2.png" alt="Preview Game 2">
                <p>Snake</p>
                <a href="https://poki.com/id/g/snake-cool" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
            <div class="game-item">
                <h2>Game 3</h2>
                <img src="img/game3.png" alt="Preview Game 3">
                <p>Sudoku</p>
                <a href="https://www.websudoku.com/" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
            <div class="game-item">
                <h2>Game 4</h2>
                <img src="img/game4.png" alt="Preview Game 4">
                <p>Chess</p>
                <a href="https://www.friv.com/z/games/chess/game.html" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
            <div class="game-item">
                <h2>Game 5</h2>
                <img src="img/game5.png" alt="Preview Game 5">
                <p>Memory Game</p>
                <a href="https://www.friv.com/z/games/memorychess/game.html" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
            <div class="game-item">
                <h2>Game 6</h2>
                <img src="img/game6.png" alt="Preview Game 6">
                <p>Puzzle</p>
                <a href="https://poki.com/id/g/jigsaw-gems" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
            <div class="game-item">
                <h2>Game 7</h2>
                <img src="img/game7.png" alt="Preview Game 7">
                <p>Minesweeper</p>
                <a href="https://minesweeper.online/" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
            <div class="game-item">
                <h2>Game 8</h2>
                <img src="img/game8.png" alt="Preview Game 8">
                <p>Pacman</p>
                <a href="https://www.friv.com/z/games/pacxondeluxe/game.html" style="text-decoration: none;">
                    <button class="button">Play Now</button>
                </a>
            </div>
        </div>
        <div class="footer">
            © @faiz_pratama02
        </div>
    </div>

    <script src="JS/music.js"></script>

</body>
</html>
