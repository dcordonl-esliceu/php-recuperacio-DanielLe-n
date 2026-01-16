<?php
require __DIR__ . "/db.php";
$pageTitle = "Inicio";
require __DIR__ . "/includes/header.php";
?>

<section class="hero">
    <div class="hero-content">
        <h1>Pagina de recuperación del examen</h1>
        <button><a href="afegir_alumne.php">Insertar</a></button>
        <img src="../uploads/stars.jpg" alt="Imagen de portada">
    </div>
</section>

<?php
require __DIR__ . "/includes/footer.php";
?>