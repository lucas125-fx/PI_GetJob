<?php
include_once(dirname(__FILE__) . "/inc/MySQL.php");
include_once(dirname(__FILE__) . "/inc/header.php");
include_once(dirname(__FILE__) . "/inc/menu.php");
include_once(dirname(__FILE__) . "/inc/carrosel.php");

echo isset($_SESSION['ID_usu']) ? $_SESSION['ID_usu'] : " NAO FOI SETADA";

include_once(dirname(__FILE__) . "/inc/listwork.php");

include_once(dirname(__FILE__) . "/inc/down.php");
include_once(dirname(__FILE__) . "/inc/footer.php");
