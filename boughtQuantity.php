<?php
    $boughtQuantity = $_POST["boughtQuantity"];
    $query = "CREATE VIEW boughtQ AS SELECT customer.firstname, product.description, purchases.Quantity FROM customer, product, purchases WHERE purchases.cusID = customer.cusID AND purchases.prodID = product.prodID AND purchases.Quantity > " . $boughtQuantity . ";";
    mysqli_query($connection,$query);
?>