<!DOCTYPE html>
<html>
    <head>
        <title>Admin || Login</title>
        <link rel="stylesheet" href="asset/css/admin_login.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="overly">
                <div class="main_form">
                    <h2>Admin Login</h2>
                    <form action="index.php" method="post">
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