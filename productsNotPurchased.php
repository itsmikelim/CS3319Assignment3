<?php
    $query = "SELECT product.description FROM product WHERE product.prodID NOT IN (SELECT purchases.prodID FROM purchases);";
    $result = mysqli_query($connection,$query);
    if ($result != false) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["product.description"];
            echo "<br>";
        } 
    }
?>