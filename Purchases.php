<?php
    $whichCus = $_POST["pickacustomer"];
    $query = "SELECT * FROM purchases WHERE cusID = ". $whichCus .";";
    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query on purchases failed.");
    }
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row["cusID"] . $row["Quantity"] . " BY" . $row["prodID"] . "</li>";
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
