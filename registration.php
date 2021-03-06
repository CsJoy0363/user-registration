<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

<div>
<?php
if(isset($_POST['create'])){
    echo 'User submitted.';
}
?>
</div>
    
<div>
<form action="registration.php" method="post">
<div class="container">
<h1>Registration</h1>
<p>Fill up the form correctly</p>
<label for="firstname"><b>First Name</b></label>
<input type="text" name="Firstname" required>

<label for="lastname"><b>Last Name</b></label>
<input type="text" name="Lastname" required>

<label for="email"><b>Email Address</b></label>
<input type="email" name="email" required>

<label for="phonenumber"><b>Phone Number</b></label>
<input type="text" name="phonenumber" required>

<label for="password"><b>Password</b></label>
<input type="password" name="password" required>

<input type="submit" name="create" value="Sign Up">
</div>
</form>
</div>


</body>
</html>