<?php
    $whichCusIDForUpdateCustomer = $_POST["cusIDForUpdateCustomer"];
    $newPhoneNumber = $_POST("newPhoneNumber");
    $query = "UPDATE customer SET phonenumber = " . $newPhoneNumber . " WHERE cusID = " . $whichCusIDForUpdateCustomer . ";";
    $result = mysqli_query($connection,$query);
?>