<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membership</title>
    <!-- Bootstrapの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
    <!-- stylesheet.cssの読み込み -->
    <link href="css/home1.css" rel="stylesheet" type="text/css">
    <link href="css/membership.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/04inv_pf.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="img/logo1.jpg">
        </div>
        <nav>
            <div class="cp_navi">
                <ul>
                    <li><a href="pf1.php"><i class="fas fa-home"></i> Home</a></li>
                    <li>
                        <a href="select.php"><i class="fas fa-chalkboard-teacher"></i> Products</a>
                    </li>
                    <li><a href="#"><i class="far fa-handshake"></i> Membership</a></li>
                    <li><a href="notice.php"><i class="fas fa-bell"></i> Notice</a></li>
                    <li><a href="index.php"><i class="fas fa-video"></i> Upload</a></li>
                    <li><a href="messages.php"><i class="fas fa-comments"></i> Messages</a></li>
                </ul>
            </div>
        </nav>

        <div class="icon float-right">
            <a href="#" class="btn-circle-border-simple">ICON</a>
            <div>
                <ul>
                    <li><a href="pf.php">プロフィール</a></li>
                    <li><a href="#setting">設定</a></li>
                    <li><a href="logout.php">ログアウト</a></li>
                </ul>
            </div>
        </div>

    </header>
    <main>
        <div class="cp_tab">
            <div class="cp_tabpanels">
                <label for="tab5_1">メンバーシップリスト</label>
                <input id="tab5_1" name="cp_tab" type="radio" checked="checked">
                <div class="cp_tabpanel">
                    <table class="table table-hover">
                        <thead>
                            <tr>

                                <th>投資家名</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>山田太郎</td>

                            </tr>
                            <tr>

                                <td>山田一郎</td>

                            </tr>
                            <tr>

                                <td>山田次郎</td>
                            </tr>
                            <tr>

                                <td>山田三郎</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="cp_tabpanels">
                <label for="tab5_2">メンバーシップ申請</label>
                <input id="tab5_2" name="cp_tab" type="radio">
                <div class="cp_tabpanel">
                    <table class="table table-hover">
                        <thead>
                            <tr>

                                <th>投資家名</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>田中太郎</td>
                                <td><a href="" class="badge badge-primary">承認</a><a href="" class="badge badge-danger">拒否</a></td>
                            </tr>
                            <tr>

                                <td>田中一郎</td>
                                <td><a href="" class="badge badge-primary">承認</a><a href="" class="badge badge-danger">拒否</a></td>
                            </tr>
                            <tr>

                                <td>田中次郎</td>
                                <td><a href="" class="badge badge-primary">承認</a><a href="" class="badge badge-danger">拒否</a></td>
                            </tr>
                            <tr>

                                <td>田中三郎</td>
                                <td><a href="" class="badge badge-primary">承認</a><a href="" class="badge badge-danger">拒否</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script></script>

</body>

</html>