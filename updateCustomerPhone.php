<?php
    $whichCusIDForUpdateCustomer = $_POST["cusIDForUpdateCustomer"];
    $query = "SELECT * FROM customer WHERE cusID = " . $whichCusIDForUpdateCustomer . ";";
    $result = mysqli_query($connection,$query);
    if ($result != false) {
        echo "Error customer already exists.";
    }
    else {
        $query = "SELECT phonenumber FROM customer WHERE cusID = " . $whichCusIDForUpdateCustomer . ";";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "The Current Phone Number is: ";
            echo $row["phonenumber"];
        }
    }
?>