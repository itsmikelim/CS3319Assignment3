<?php
    $query = "SELECT product.description FROM product WHERE product.prodID NOT IN (SELECT purchases.prodID FROM purchases);";
    mysqli_query($connection,$query);
?>