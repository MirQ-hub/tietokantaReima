<?php
require "dbConnection.php";
$db = createDbConnection();


//*4. Monipuolinen haku: get_artist_info.php
//a. Lisää koodiin muuttuja nimeltä artist_id. Tiedosto hakee ja palauttaa JSONmuodossa artistin nimen ja sekä artistin albumit ja albumien kappaleet. Esimerkki
//vastauksessa kuvassa 2.//*

$artist_id = 4; 
$album_id = 1;

// Haetaan artistin tiedot tietokannasta
$artist = "SELECT name FROM artists WHERE artistid=$artist_id";
$statement =$db->prepare($artist);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    $artist_name = $row["name"];
    echo $artist_name;
}

$album = "SELECT title FROM albums WHERE artistid=$artist_id";
$statement =$db->prepare($album);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    $album_name = $row["title"];
    echo $album_name;
}

$track = "SELECT name FROM tracks WHERE albumid=$album_id";
$statement =$db->prepare($track);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    $album_track =$row["name"];
    echo $album_track;
}

$response = array(
    "Artist_name"=>$artist_name,
    "Albums"=>[$album_name],
    "Tracks"=>[$track]
);


$responseJSON= json_encode($response);
header('Content-Type: application/json');
echo $responseJSON;








