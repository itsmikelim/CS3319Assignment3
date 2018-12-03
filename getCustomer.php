<?php
    $query = "SELECT * FROM customer;";
    $result = mysqli_query($connection,$query);
    if (!result) {
        die("databases query failed.");
    }
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="https://coursehero.com/main.php">Click here</a>';
    echo $row["customerID"];
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
