<?php
include_once(dirname(__FILE__) . "/inc/MySQL.php");

include_once(dirname(__FILE__) . "/inc/header.php");
include_once(dirname(__FILE__) . "/inc/menu.php");
?>

<?php
include_once(dirname(__FILE__) . "/inc/carrosel.php");
echo isset($_SESSION['ID_usu']) ? $_SESSION['ID_usu'] : " NAO FOI SETADA";

?>
<div class="bg-dark shadow-lg">
    <div class="text-center" style="color: goldenrod; font-size: 4em;">Vagas disponíveis</div>
    <?php


    include_once(dirname(__FILE__) . "/inc/listwork.php");
    ?>
</div>
<?php
include_once(dirname(__FILE__) . "/inc/footer.php");
include_once(dirname(__FILE__) . "/inc/down.php");
?>