<?php 
    $whichCusIDForNewPurchase = $_POST["cusIDForNewPurchase"];
    $whichProdIDForNewPurchase = $_POST["prodIDForNewPurchase"];
    $whichQuantityForNewPurchase = $_POST["quantityForNewPurchase"];

    $query = "INSERT INTO purchases (cusID, prodID, Quantity) VALUES (" . $whichCusIDForNewPurchase . ", " . $whichProdIDForNewPurchase . ", " . $whichQuantityForNewPurchase . ");";
?>