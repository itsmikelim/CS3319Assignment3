<?php 

$whichCusIDForNewPurchase = $_POST["cusIDForNewPurchase"];
$whichProdIDForNewPurchase = $_POST["prodIDForNewPurchase"];
$whichQuantityForNewPurchase = $_POST["quantityForNewPurchase"];

$query = "SELECT * FROM customer WHERE cusID = " . $whichCusIDForNewPurchase . ";";
$query2 = "SELECT * FROM product WHERE prodID = " . $whichProdIDForNewPurchase . ";";
$query3 = "SELECT * FROM purchases WHERE cusID = " . $whichCusIDForNewPurchase . " AND prodID = " . $whichProdIDForNewPurchase . ";";

$result = mysqli_query($connection,$query);
$result2 = mysqli_query($connection, $query2);
$result3 = mysqli_query($connection, $query3);

if ($result != false) {
    if ($result2 != false) {
        if ($result3 != false) {
            $query = "UPDATE purchases SET Quantity = Quantity + " . $whichQuantityForNewPurchase . " WHERE cusID = " . $whichCusIDForNewPurchase . " AND prodID = " . $whichProdIDForNewPurchase . ";";
        }
        else {
        $query = "INSERT INTO purchases (cusID, prodID, Quantity) VALUES (" . $whichCusIDForNewPurchase . ", " . $whichProdIDForNewPurchase . ", " . $whichQuantityForNewPurchase . ");";
        }
    }
    else {
        echo "error in the product ID.";
    }
}
else {
    echo "error in the customer ID.";
}
mysqli_query($connection,$query);


?>