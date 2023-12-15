<?php
include_once 'layout/head.php';
include_once 'layout/imports/links-error.php';
include_once 'layout/close-head.php';
?>

<div>
    <span class="span-error"><?php echo "Erro: " .mysqli_connect_error(); ?></span>
    <img class="error-404" src="image/404.png" alt="error-404">
</div>

</body>