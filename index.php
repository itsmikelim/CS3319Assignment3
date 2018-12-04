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
<script src="customer.js"></script>
<?php 
$whichCus = $_POST["pickacustomer"];
?>

Select the order of purchase information:
<br>
<form action="" method="post">
<select name="pickadescriptor" id="pickadescriptor">
    <option value="1">Select Here</option>
    <option value="2">By Description</option>
    <option value="3">By Price</option>
</select>
</form>
<script src="descriptor.js"></script>
<?php
$whichDesc = $_POST["pickadescriptor"];
?>

<form action="" method="post">
<select name="pickanorder" id="pickanorder">
    <option value="1">Select Here</option>
    <option value="2">Ascending</option>
    <option value="3">Descending</option>
</select>
</form>
<script src="order.js"></script>
<?php
$whichOrder = $_POST["pickanorder"];
?>

<hr>





<?php
                include "connecttodb.php";
                include "Purchases.php";
?>

<hr>
</body>
</html>