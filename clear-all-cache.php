<?php
/* ------------------------------------------------------------------------------
This file will clear all drupal caches when called
-------------------------------------------------------------------------------*/

/* ------------------------------------------------------------------------------
Change this to match your database settings
-------------------------------------------------------------------------------*/

$db_host = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "sqldb";

$sqldb=mysqli_connect($db_host, $db_username, $db_password)
    or die ('MySQL Not found // Could Not Connect.');

/* ------------------------------------------------------------------------------
Edit these lines to include any other cache tables in myphpadmin
-------------------------------------------------------------------------------*/

mysqli_query($sqldb, "TRUNCATE TABLE {cache};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_block};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_bootstrap};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_features};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_feeds_http};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_field};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_filter};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_form};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_image};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_libraries};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_menu};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_page};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_path};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_performance};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_token};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_update};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_views};");
mysqli_query($sqldb, "TRUNCATE TABLE {cache_views_data};");

if (mysqli_connect_errno($sqldb))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }    
else echo "Success!";

?>
