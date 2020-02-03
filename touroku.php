<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrapの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- stylesheet.cssの読み込み -->
    <link rel="stylesheet" type="text/css" href="css/08resister.css">
    <title>resister</title>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <br>
                <br><br><br>
                <h3>Welcome to Startup station!!</h3>
                <p>会員登録をしてください。</p>

            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">会員登録</h3>
                        <div class="row register-form">
                            <form class="col-md-6" action="touroku_insert.php" method="post" style="width:50%;margin:0 auto;">
                                <div class="form-group">
                                    <input type="text" name="namae" class="form-control" placeholder="Name" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lid" class="form-control" placeholder="ID" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="lpw" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                </div>
                                <div class="form-group">

                                    <label class="radio inline">
                                        <input type="radio" name="who" value="1" checked>
                                        <span> 投資家 </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="who" value="2">
                                        <span>起業家 </span>
                                    </label>
                                </div>
                                <input type="submit" class="btnRegister" value="Register" style="margin-bottom:25px;width:50%;margin:0 auto;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>