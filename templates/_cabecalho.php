<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Vitrine</title>

    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grandiflora+One&display=swap" rel="stylesheet">

    <!-- css bootstrap -->
    <link rel="stylesheet" href="/front_vitrine/css/bootstrap.css">
    <!-- css personalizado lido depois do bootstrap para que possamos substituir algumas regras -->
    <link rel="stylesheet" href="/front_vitrine/css/style.css">

    <!-- script bootstrap -->
    <script src="/front_vitrine/js/bootstrap.bundle.js" defer></script>
    <!-- script personalizado -->
    <script src="/front_vitrine/js/script.js" defer></script>


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/front_vitrine/index.php">VITRINE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link modo" aria-current="page" href="javascript:;">
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/front_vitrine/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/front_vitrine/views/produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/front_vitrine/views/sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login">
                            <a class="nav-link" href="/front_vitrine/views/login.php">
                                <span class="material-symbols-outlined">
                                    account_circle
                                </span>
                            </a>
                        </li>
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Perfil">
                            <a class="nav-link" href="/front_vitrine/views/perfil.php">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>