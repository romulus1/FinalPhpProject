<?php
    require_once(__DIR . "/../model/config.php");
    
    $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "posts text NOT NULL,"
            . "DateTime datetime NOT NULL ,"
            . "PRIMARY KEY (id))");
    
    if($query) {
        echo "<p>Successfully created table: posts</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }