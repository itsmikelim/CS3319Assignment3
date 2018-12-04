<!DOCTYPE html>
<html>
<head>
    <title>assignment3</title>
</head>
<body>

<?php
    include "connecttodb.php";
?>

<h1>Purchases:</h1>
<br>

customerID = cusID;
<?php
    $query = "SELECT * FROM purchases;";
    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query failed.");
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
</body>
</html>