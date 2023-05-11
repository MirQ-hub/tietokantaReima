<?php
require "dbConnection.php";
$db = createDbConnection();


// Hae artistin nimi
$artist_id = 4;
$sql = "SELECT id FROM albums WHERE artistid = $artist_id=?";
echo $sql;




