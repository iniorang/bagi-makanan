<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Style.css">
    <title>Document</title>
</head>

<body>
    <div class="form-container">
        <form method="post" id="loginform" action="backlogin.php">
            <h1>Login</h1>
            <div class="form-input">
                <label>Email</label><br>
                <input class="form" type="text" name="form_email"><br>
            </div>
            <div class="form-input">
                <label>Password</label><br>
                <input class="form" type="password" name="form_userpass"><br>
            </div>
            <a href="">Lupa Password?</a>
            <button style="float: right">Login</button><br>
            <a href="Register.html">
                <button style="width: 34em; margin-top: 5px;">Register</button>
            </a>
        </form>
    </div>
    <!--<script src="scripts.js"></script>-->
</body>

</html>