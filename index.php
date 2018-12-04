<!DOCTYPE html>
<html>
<head>
    <title>assignment3</title>
</head>
<body>


<?php
    include "connecttodb.php";
?>

<h1>Customers</h1>
Select your customer:
<br>
<form action="" method="post">
<select name="pickacustomer" id="pickacustomer">
    <option value="1">Select Here</option>

<?php
    include "getCustomer.php";
?>
</select>
</form>

Select the order of purchase information:
<br>
<form action="" method="post">
<select name="pickadescriptor" id="pickadescriptor">
    <option value="1">Select Here</option>
    <option value="2">By Description</option>
    <option value="3">By Price</option>
</select>
</form>

<form action="" method="post">
<select name="pickanorder" id="pickanorder">
    <option value="1">Select Here</option>
    <option value="2">Ascending</option>
    <option value="3">Descending</option>
</select>
</form>

<hr>

<script src="customer.js"></script>
<script src="descriptor.js"></script>
<script src="order.js"></script>

<?php
    if (isset ($_POST['pickacustomer'])) {
        if (isset ($_POST['pickanorder'])) {
            if (isset ($_POST['pickadescriptor'])) {
                include "connecttodb.php";
                include "Purchases.php";
            }
        }
    }
?>



<hr>
</body>
</html>