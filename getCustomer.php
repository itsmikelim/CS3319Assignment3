<?php
    $query = "SELECT * FROM customer;";
    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query failed.");
    }
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["customerID"] . ' ' . $row["firstname"] . $row["lastname"] . $row["city"] . $row["phonenumber"] . $row["agentID"];
}  
    mysqli_free_result($result);
?>
