<?php

    include ('traduccion.php');
    $respuesta='JJJ';
?>

<!DOCTYPE html>
<html>
<head><meta charset="utf-8"></head>
<body>
    <nav>
        <a href="#">Nosotros</a>
        <a href="#"><?php echo $respuesta; ?></a>
        <a href="#"><?php echo __('Nosotros','ing'); ?></a>
        <a href="#"><?php echo __('Nosotros','fra'); ?></a>
    </nav>

</body>
</html>