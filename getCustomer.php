<?php
    $query = "SELECT * FROM customer;";
    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query failed.");
    }
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="https://http://cs3319.gaul.csd.uwo.ca/vm113/assignment3/CS3319Assignment3/Purchases.php">Click here to view purchases</a>';
    echo $row["cusID"];
    echo " ";
    echo $row["firstname"];
    echo " ";
    echo $row["lastname"];
    echo ": ";
    echo $row["city"];
    echo " | ";
    echo $row["phonenumber"];
    echo " | ";
    echo $row["agentID"];
    echo "<br>";
}  
    mysqli_free_result($result);
?>
