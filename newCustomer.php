<?php
    $whichCusIDForNewCustomer = $_POST["cusIDForNewCustomer"];
    $whichFirstNameForNewCustomer = $_POST["firstNameForNewCustomer"];
    $whichLastNameForNewCustomer = $_POST["lastNameForNewCustomer"];
    $whichCityForNewCustomer = $_POST["cityForNewCustomer"];
    $whichPhoneNumberForNewCustomer = $_POST["phoneNumberForNewCustomer"];
    $whichAgentIDForNewCustomer = $_POST["agentIDForNewCustomer"];

    $query = "SELECT * FROM customer WHERE cusID = " . $whichCusIDForNewCustomer . ";";

    $result = mysqli_query($connection,$query);

    if ($result != false) {
        echo "Error customer already exists.";
    }
    else {
        $query = "INSERT INTO customer (cusID, firstname, lastname, city, phonenumber, agentID) VALUES (" . $whichCusIDForNewCustomer . ", " . $whichFirstNameForNewCustomer . ", " . $whichLastNameForNewCustomer . ", " . $whichCityForNewCustomer . ", " . $whichPhoneNumberForNewCustomer . ", " . $whichAgentIDForNewCustomer . ");";
    }
    mysqli_query($connection,$query);
?>