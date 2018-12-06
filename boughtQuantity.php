<?php
    $boughtQuantity = $_POST["boughtQuantity"];
    $query = "CREATE VIEW boughtQ AS SELECT customer.firstname, product.description, purchases.Quantity FROM customer, product, purchases WHERE purchases.cusID = customer.cusID AND purchases.prodID = product.prodID AND purchases.Quantity > " . $boughtQuantity . ";";
    $result = mysqli_query($connection,$query);

    if ($result != false) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Customer Name: ";
        echo $row["customer.firstname"];
        echo "<br>";
        echo "Product Description: ";
        echo $row["product.description"];
        echo "<br>";
        echo "Quantity: ";
        echo $row["purchases.Quantity"];
        echo "<br>";
    } 
} 
?>