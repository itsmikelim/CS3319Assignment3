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


<?php
    include "getCustomer.php";
?>
</select>
</form>
<hr>
<?php
    if(isset ($_POST['pickacustomer'])) {
        include "connecttodb.php";
        include "getCustomer.php";
    }
?>
<hr>
</body>
</html>