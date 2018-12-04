<?php
    $whichCus = $_POST["pickacustomer"];
    $whichDesc = $_POST["pickadescriptor"];
    $whichOrder = $_POST["pickanorder"];
    if ($whichDesc = 2) {
        if ($whichOrder = 2) {
            $query = "CREATE VIEW purchasesView AS SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity WHERE product.prodID = purchases.prodID ORDER BY product.description ASC;";
        }
        if($whichOrder = 3) {
            $query = "CREATE VIEW purchasesView AS SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity WHERE product.prodID = purchases.prodID ORDER BY product.description DESC;";
        }
    }

    if ($whichDesc = 3) {
        if ($whichOrder = 2) {
            $query = "CREATE VIEW purchasesView AS SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity WHERE product.prodID = purchases.prodID ORDER BY product.cost ASC;";
        }
        if($whichOrder = 3) {
            $query = "CREATE VIEW purchasesView AS SELECT product.description, product.cost, purchases.cusID, purchases.prodID,  purchases.Quantity WHERE product.prodID = purchases.prodID ORDER BY product.cost DESC;";
        }
    }
    

    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query on purchases failed.");
    }
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Customer ID: ";
        echo $row["purchases.cusID"];
        echo "<br>";
        echo "Product ID: ";
        echo $row["purchases.prodID"];
        echo "<br>";
        echo "Quantity: ";
        echo $row["purchases.Quantity"];
        echo "<br>";
        echo "Product Description: ";
        echo $row["product.description"];
        echo "<br>";
        echo "Product Price: ";
        echo $row["product.cost"];
        echo "<br>";
    }  
    mysqli_free_result($result);
?>
