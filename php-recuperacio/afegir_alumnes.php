<?php
$pageTitle = "Inicio";
require __DIR__ . "/includes/header.php";
?>
<section class="form-container">

<form action="insertar_alumne.php" class="login-form" method="post">
    <h2>Iniciar Sessión</h2>
    <label for="username">Nombre usuario:</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>


    <button type="submit">Insertar</button>
</form>

</section>

<?php
require __DIR__ . "/includes/footer.php";
?>