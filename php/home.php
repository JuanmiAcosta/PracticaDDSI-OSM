<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("You must login first");      
                window.location = "../index.php";      
            </script>
        ';
    session_destroy();
    die();
} else {
    $usuario = $_SESSION['usuario'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SOPOMA App</title>
    <meta name="description" content="The main content area." />
    <link rel="shortcut icon" href="../icon/logo.png" />
    <link rel="stylesheet" href="../css/style-home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="font-family: 'system-ui', sans-serif;">

    <header class="header">

        <div class="logo">
            <!-- la que hay que liar para pasar la variable usuario de un lao pa otro -->
            <?php

            echo '<a href="sendhome.php?usuario=' . urlencode($usuario) . '">
            
                        <img src="../icon/logo.png" alt="logo" />

                    </a>'
                ?>
        </div>

        <nav>
            <input type="checkbox" id="check" />

            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Profiles</a></li>
                <li><a href="#" class="btn">
                        <button>@
                            <?php echo $usuario; ?>'s place
                        </button>
                    </a>
                </li>
                <!-- poner icono sign out -->
                <li><a href="../php/close_session.php"><svg id="puerta" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 576 512">
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path
                                d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z" />
                        </svg>
                    </a></li>
            </ul>
        </nav>
    </header>

    <div class="container">

        <div id="welcome">
            <h1>
                <span id="welcome_h1" style="color:white;">🐧 Welcome, <?php echo "@$usuario" ?></span>
            </h1>
        </div>

    </div>

    <script src="../js/welcome.js"></script>

</body>

</html>