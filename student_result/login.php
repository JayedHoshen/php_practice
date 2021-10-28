<!--============ php common code ============-->
<?php
ob_start();
session_start();
include_once ('connect.php'); // connecting db file

if( isset($_SESSION["loggedIn"]) ){
	header("Location: index.php");
	exit();
}
?>

<!--============ Login form: PHP code ===========-->
<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	$username = $_POST['username'];
	$userpassword = $_POST['password'];

	// database query
	$query = "SELECT * FROM user ORDER BY user_id ASC";
	$result = mysqli_query($connection, $query);
	
	// database and login file checking
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			if ($username == $row['user_name'] && $userpassword == $row['user_password']) {
				$_SESSION["loggedIn"] = true;
				header("Location: index.php"); // redirect to dashboard/indexpage
				exit();
			}
			
		}
	}

    $_SESSION['error'] = 'Please correct user name or password....';
    header("Location: login.php"); // redirect to login page
    exit();
}

?>

<!--============ Login form: HTML code ============-->
<!DOCTYPE html>
<html>
    <head>
        <title>Admin || Login</title>
        <link rel="stylesheet" href="./asset/css/admin_login.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="overly">
                <div class="main_form">
                    <h2>Admin Login</h2>
                    <?php
                        if(isset($_SESSION['error'])) {
                            if(strlen($_SESSION['error']) > 10) {
                                echo '<span class="error_msg">'.$_SESSION['error'].'</span>';
                                $_SESSION['error'] = '';
                            }
                        }
                    ?>
                    <form action="login.php" method="post" name="submitForm">
                        <div class="user_name">
                            <label for="u_name">User Name</label>
                            <input type="text" name="username" id="u_name" placeholder="user name" required>
                        </div>
                        <div class="user_password">
                            <label for="u_pwd">Password</label>
                            <input type="password" name="password" id="u_pwd" placeholder="password" required>
                        </div>
                        <div class="login_btn">
                            <input type="submit" value="Log In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>