<?php
require "dbConnection.php";
$db = createDbConnection();

//*a. Lisää koodiin muuttuja nimeltä invoice_item_id. Poista tietokannasta invoice_item tällä id:llä.
//*

$invoice_item_ID = 1;
$sql = "DELETE FROM invoice_items WHERE InvoiceLineId = $invoice_ID";

$db->exec($sql); 

