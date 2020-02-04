<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrapの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" type="text/css" href="css/07login.css">
    <title>login</title>
</head>

<!-- login start -->

<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1" style="justify-content: center;">
                <br>
                <img class="logo" src="img/logo1.jpg" style="width:100%;margin-top:55px">
            </div>
            <div class="col-md-6 login-form-2">
                <br>
                <h3>LOGIN</h3>
                <form method="post" action="login_act.php">
                    <div class="form-group" class="login">
                        <input type="text" class="form-control" placeholder="Your ID" value="" name="lid">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password" value="" name="lpw">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login">
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                    </div>
                    <div class="form-group">
                        <a href="touroku.php" class="ForgetPwd">For Resister</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>