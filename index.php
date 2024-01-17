<?php
// session_start();
// include("pages/conexion.php");

// if (isset($_SESSION['usuario']) && isset($_SESSION['password'])) {        
//     if ($_SESSION['usuario'] != 'admin' && $_SESSION['password'] != 'admin') {
//         header("location:pages/login.php");
//         exit();
//     }
// } else {
//     header("location:pages/login.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Grupo 3
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="g-sidenav-show  bg-gray-100">
    <div class="container text-center menu">
        <h1 class="titulo">MENU</h1>
        <div class="row align-items-start text-center justify-content-center">
            <div class="col-6 col-sm-6 my-2">
                <a href="pages/login-usuario.html">
                    <img src="assets/img/usuario.png" alt="Logo de usuario">
                </a>
                <h2>Usuario</h2>
            </div>
            <div class="col-6 col-sm-6 my-2">
                <a href="pages/login.php">
                    <img src="assets/img/administrador.png" alt="Logo de administrador">
                </a>
                <h2>Administrador</h2>
            </div>
        </div>
    </div>
</body>

</html>