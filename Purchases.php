<?php
    $whichCus = $_POST["pickacustomer"];
    $whichDesc = $_POST["pickadescriptor"];
    $whichOrder = $_POST["pickanorder"];
    if ($whichDesc = "2") {
        if ($whichOrder = "2") {
            $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.description ASC;";
        }
        if($whichOrder = "3") {
            $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.description DESC;";
        }
    }

    if ($whichDesc = "3") {
        if ($whichOrder = "2") {
            $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.cost ASC;";
        }
        if($whichOrder = "3") {
            $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.cost DESC;";
        }
    }

    else {
        $query = "SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity FROM product, purchases WHERE (product.prodID = purchases.prodID) AND (purchases.cusID = " . $whichCus . ") ORDER BY product.description ASC;";
    }
    

    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query on purchases failed.");
    }
    echo "<ul>";
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
        echo "Product Description: ";
        echo $row["description"];
        echo "<br>";
        echo "Product Price: ";
        echo $row["cost"];
        echo "<br>";
        echo "<br>";
    }  
    mysqli_free_result($result);
?>
