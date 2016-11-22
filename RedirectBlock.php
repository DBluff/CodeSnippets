<?php

$db_host = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_name = "sitecopy";

    $sqldb = mysqli_connect($db_host, $db_username, $db_password, $db_name)
    or die ('MySQL Not found // Could Not Connect.');

    $fullTable = mysqli_query($sqldb, "
SELECT redirect.redirect, url_alias.source, redirect.source, url_alias.alias
FROM redirect
INNER JOIN url_alias
ON redirect.redirect=url_alias.source
ORDER BY url_alias.source;;");
    ?>

    <table>
    <?php

    while ($row = mysqli_fetch_array($fullTable)) {

        if ($_SERVER['REQUEST_URI'] === $row['alias']) {
            echo 'Vanity URL:' . '<br />' . '<a href="http://austincc.edu/' . $row['source'] . '">' . 'austincc.edu/' . $row['source'] . '</a>';
        } else exit();
    }
}

