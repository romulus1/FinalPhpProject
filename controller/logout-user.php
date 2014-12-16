<?php
    require_once(__DIR__ . "/../model/config.php");
    
    unset($_SESSION["aunthenticated"]); //
    
    session_destroy();
    header("Location: " . $path . "index.php");