<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
if(isset($_POST['Submit'])) {
	$first_name      =  $_POST['user_first_name'];
	$last_name       =  $_POST['user_last_name'];
	$user_email      =  $_POST['user_email'];
	$user_pass       =  $_POST['user_pass'];

    $query = "INSERT INTO reg_user(first_name,last_name,user_email,user_pass) VALUES('$first_name','$last_name','$user_email','$user_pass')";
	$result = mysqli_query($mysqli,$query);
        if ($result== true) {
        header("Location: index.php");
        }  
        else {
        echo "you have a error";
        }
	}
?>
<body>
<form role="form" action="registration.php" method="post">
    <div class="form-group">
        <label class="sr-only" for="form-first-name">First name</label>
        <input type="text" name="user_first_name" placeholder="First name..." class="form-username form-control">
    </div>
    <div class="form-group">
        <label class="sr-only" for="form-last-name">Last name</label>
        <input type="text" name="user_last_name" placeholder="Last name..." class="form-username form-control"/>
    </div>
    <div class="form-group">
        <label class="sr-only" for="form-email">Email</label>
        <input type="text" name="user_email" placeholder="Email..." class="form-username form-control"/>
    </div>
    <div class="form-group">
        <label class="sr-only" for="form-about-yourself">Password</label>
        <input type="password" name="user_pass" placeholder="passworf..." class="form-username form-control"/>
    </div>
        <button type="submit" class="btn" name="Submit"><strong>Sign up</strong></button>
</form>
</body>
</html>