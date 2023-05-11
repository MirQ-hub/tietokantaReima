<?php
require "dbConnection.php";
$db = createDbConnection();

//*3. Transaktio: remove_artist.php
//*a. Tiedostossa on parametreina artist_id. Poista kyseinen artisti ja kaikki siihen liittyvät
//*tiedot kannasta transaktiona. Huom! Tutki kannan rakennetta ja poista
//*riippuvuudet oikeassa järjestyksessä.(artists/albums/tracks/invoice_items).
//*https://www.sqlitetutorial.net/sqlite-sample-database/*//

$playlistid=1;

try{
    $db->beginTransaction();
  
    $statement = $db->prepare("DELETE FROM playlist_track WHERE $playlistid=?");
    $statement->execute(array($playlistid));

    $statement = $db->prepare("DELETE FROM playlists WHERE $playlistid=? ");
    $statement->execute(array($playlistid));

  
  
    $db->commit();

}catch(Exception $e){

    $db->rollBack();

    echo $e->getMessage();
}


