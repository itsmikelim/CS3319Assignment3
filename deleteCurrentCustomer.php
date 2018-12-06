<?php
    $whichCusIDForDelete = $_POST["cusIDForDeletion"];
    $query = "SELECT * FROM customer WHERE cusID = " . $whichCusIDForDelete . ";";
    $result = mysqli_query($connection,$query);
    if ($result != false) {
        $query = "DELETE FROM customer WHERE cusID = " . $whichCusIDForDelete . ";";
        $result = mysqli_query($connection,$query);
    }
    else {
            echo "This customer does not exist.";
        }
?>