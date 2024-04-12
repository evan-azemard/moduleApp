<?php
//Return name of the page
include './controller/Rooter.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'moduleAdd';
$nameView  = Rooter::route($page);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="module" src="assets/js/App.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-dark text-light" data-bs-theme="dark">
        <div class="container-fluid">
            <h1><?= $page ?></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item m-5">
                        <a href="index.php?page=moduleStatus">ModuleStatus</a>
                    </li>
                    <li class="nav-item m-5">
                        <a href="index.php?page=moduleAdd">ModuleAdd</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu">
                            <a href="index.php?page=moduleStatus">ModuleStatus</a>
                            <a href="index.php?page=moduleAdd">ModuleAdd</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
<main class="container mt-5">
    <?php include $nameView ?>
</main>
</body>
</html>