<?php 
    require_once('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Rethink+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>P.PlantStore</title>
</head>
<body>
    <div class="navbar">
        <div class="nav-control">
                <div class="nav-left">
                    <span class="nav-logo">P.PlantStore</span>
                </div>
                <div class="nav-right">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">Plants</a>
                    <a href="#" class="nav-link">Register</a>
                    <a href="#" class="nav-link">Log In</a>
                    <button class="dark-btn" onclick="toggleDarkmode()"><span class="material-symbols-outlined">dark_mode</span></button>
                </div>
        </div>
        
    </div>

    <div class="container">
        <div class="slideshow">

        </div>
        <div class="line"> </div>
        <span class ="card-gridbox-title">Best Sellings</span>
        <div class="card-gridbox">
            <a class="plant-link" href="plant.php">
                <div class="card-1">
                    <div class="card-title-box">
                        <span class="card-title">🥇 <span class="card-plantname">PlantName1</span></span>
                    </div>
                </div>
            </a>
            <div class="card-1">
                <div class="card-title-box">
                    <span class="card-title">🥈 <span class="card-plantname">PlantName2</span></span>
                </div>

            </div>
            <div class="card-1">
                <div class="card-title-box">
                    <span class="card-title">🥉 <span class="card-plantname">PlantName3</span></span>
                </div>

            </div>
        </div>
        <span class ="card-gridbox-title">Best Sellings</span>


    <div class="footer">
        
    </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>