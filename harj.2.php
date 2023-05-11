<?php
require "dbConnection.php";
$db = createDbConnection();

$playlist_id = 2;

$sql = "SELECT Name, Composer FROM tracks INNER JOIN playlist_track ON tracks.TrackId = playlist_track.TrackId WHERE playlist_track.PlaylistID = $playlist_id";

$statement = $db->prepare($sql);
$statement ->execute();

$rows = $statement ->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    echo "<h1>". $row["Name"] . " - " .$row["Composer"] . "</h1>";
}


