<?php
    
    
    $whichCus = $_POST["pickacustomer"];
    // echo $whichCus;
    // echo $whichDesc;
    // echo $whichOrder;
    // if ($whichDesc == 2) {
    //     if ($whichOrder == 2) {
    //         $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID, purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.description ASC;";
    //     }
    //     if($whichOrder == 3) {
    //         $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID, purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.description DESC;";
    //     }
    // }

    // if ($whichDesc == 3) {
    //     if ($whichOrder == 2) {
    //         $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID, purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.cost ASC;";
    //     }
    //     if($whichOrder == 3) {
    //         $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID, purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.cost DESC;";
    //     }
    // }

    // else {
    //     $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID, purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.description ASC;";
    // }
    
    $query = "SELECT * FROM purchases WHERE cusID = " . $whichCus . ";";

    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("databases query on purchases failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "Customer ID: ";
        echo $row["cusID"];
        echo "<br>";
        echo "Product ID: ";
        echo $row["prodID"];
        echo "<br>";
        echo "Quantity: ";
        echo $row["Quantity"];
        echo "<br>";
    }  
    mysqli_free_result($result);
?>
