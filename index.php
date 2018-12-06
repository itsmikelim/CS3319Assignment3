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

<!--
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
// $whichDesc = $_POST["pickadescriptor"];
// echo $whichDesc;
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
// $whichOrder = $_POST["pickanorder"];
// echo $whichOrderder
?>

<hr>
-->
<?php
    include "connecttodb.php";
    include "Purchases.php";
?>

<br>
<br>
Insert a new purchase:
<form action="newPurchase.php" method="post">
Customer ID: <input type="text" name="cusIDForNewPurchase"><br>
Product ID: <input type="text" name="prodIDForNewPurchase"><br>
Quantity: <input type="text" name="quantityForNewPurchase"><br>
<input type="submit">
</form>
<br>
<br>

Insert a new customer:
<form action="newCustomer.php" method="post">
Customer ID: <input type="text" name="cusIDForNewCustomer"><br>
First Name: <input type="text" name="firstNameForNewCustomer"><br>
Last Name: <input type="text" name="lastNameForNewCustomer"><br>
City: <input type="text" name="cityForNewCustomer"><br>
Phone Number: <input type="text" name="phoneNumberForNewCustomer"><br>
Agent ID: <input type="text" name="agentIDForNewCustomer"><br>
<input type="submit">
</form>
<br>
<br>

<hr>
</body>
</html>