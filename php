<!DOCTYPE html>
<html>
<head>
    <title>Add Distributor</title>
</head>
<body>

<h2>Create Distributor</h2>

<form method="POST" action="create_distributor.php">
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <input type="text" name="mobile" placeholder="Enter Mobile" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Create Distributor</button>
</form>

</body>
</html>
/admin/
   index.php
   add_distributor.php
   create_distributor.php
<?php
session_start();
?>

<h2>Add Retailer</h2>

<form method="POST" action="create_retailer.php">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="text" name="mobile" placeholder="Mobile" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>

    <input type="hidden" name="distributor_id" value="<?php echo $_SESSION['distributor_id']; ?>">

    <button type="submit">Create</button>
</form>
