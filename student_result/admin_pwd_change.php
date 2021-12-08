<?php include_once('./inc/header.php'); ?>
<!--============ Change Admin Password: PHP code ============-->
<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $pwdCurrent = $_POST['pwdCurrent'];
        $pwdNew = $_POST['pwdNew'];
        $userName = $_SESSION["loggedIn"];
        
        // database query
        $query = "UPDATE user SET user_password = '$pwdNew' WHERE user_name = '$userName'";
        $result = mysqli_query($connection, $query);
        
        if ($result == 1) {
            $_SESSION['pwdChange'] = 'Thanks, Your Password Change successfully.';
        } 
        else {
            echo "Error: " . $result . "<br>" . mysqli_error($connection);
        }
    }
?>

<!--============ Change Admin Password: HTML code ============-->	
<h2 class="page_title">Admin Change Password</h2>
<p style="text-align: center; font-size: 20px; color: red; margin: 0px">
    <?php 
        if(isset($_SESSION['pwdChange'])) {
            if(strlen($_SESSION['pwdChange']) > 10) {
                echo '<span>'.$_SESSION['pwdChange'].'</span>';
                $_SESSION['pwdChange'] = '';
            }
        }
    ?>
</p>
<div class="chang_pwd">
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
            <label for="ctPwd">Current Password</label>
            <input name="pwdCurrent" type="password" class="form-control" id="ctPwd" required>
        </div>
        <div class="form-group">
            <label for="nPwd">New Password</label>
            <input name="pwdNew" type="password" class="form-control" id="nPwd" required>
        </div>
        <div class="form-group">
            <label for="cPwd">Confirm Password</label>
            <input name="pwdConfirm" type="password" class="form-control" id="cPwd" required>
        </div>
        <button type="submit" class="btn btn-primary">Change</button>
    </form>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>