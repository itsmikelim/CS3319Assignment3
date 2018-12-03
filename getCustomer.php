<?php
    $query = "SELECT * FROM customer;";
    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query failed.");
    }
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["customerID"];
    echo $row["firstname"];
    echo $row["lastname"];
    echo $row["city"];
    echo $row["phonenumber"];
    echo $row["agentID"];
    "\n";
}  
    mysqli_free_result($result);
?>
