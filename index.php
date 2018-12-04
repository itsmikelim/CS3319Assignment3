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
<hr>
<script src="customer.js"></script>
<?php
    if (isset ($_POST['pickacustomer'])) {
        include "connecttodb.php";
        include "Purchases.php";
    }
?>


<hr>
</body>
</html>