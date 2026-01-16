<?php
$pageTitle = "Galeria";
require __DIR__ . "/includes/header.php";
$dir = __DIR__ . "/uploads";
$files = scandir($dir);

?>

<h1>Galeria recuperacion examen</h1>

<div class="galeria">
        <?php foreach ($files as $file): ?>
            <?php
        if ($file === "." || $file === "..") {
            continue;
        }

        if (strpos($file, "thumb") === false) {
            continue;
        }

        $full  = "uploads/" . str_replace('.thumb', '', $file);
        $thumb = "uploads/$file";
        ?>
        <img src="<?= $thumb ?>" 
         data-full="<?= $full ?>" 
         alt="" 
         class="thumb">
    <?php endforeach; ?>
</div>


<?php
require __DIR__ . "/includes/footer.php";