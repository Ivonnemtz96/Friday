<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'active';
include('includes/head.php');

if (isset($_GET)) {
    include_once("php/msg.php");
  }
?>

<body>
    <div class="main-wrapper">
        <?php
            include('includes/header.php');
            include('modules/index.php');
            include('includes/footer.php');
            include('includes/redes.php');
            include('includes/scripts.php');   
        ?>
    </div>

</body>

</html>