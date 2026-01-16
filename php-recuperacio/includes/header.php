<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inici</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css?v=<?php time(); ?>">
    <link rel="stylesheet" href="/css/style.css?v=<?php time(); ?>">
</head>
<body>
    <?php require_once __DIR__ . "/../db.php"; ?>
    <header>
        <div>
            <a href="index.php">Home</a>
            <a href="alumnes.php">Alumnes</a>
            <a href="afegir_alumne.php">Afegir_alumne</a>
            <a href="galeria.php">Galeria</a>
        </div>
    </header>