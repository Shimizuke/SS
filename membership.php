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
    <header class="header row">
        <div class="logo col-3">
            <img src="img/logo1.jpg">
        </div>
        <div class="col-7 cp_navi">
            <ul>
                <li data-toggle="tooltip" title="Home"><a href="#"><i class="fas fa-home fa-2x"></i></a></li>
                <li data-toggle="tooltip" title="Products"><a href="select.php"><i class="fas fa-chalkboard-teacher fa-2x"></i></a></li>
                <li data-toggle="tooltip" title="Membership"><a href="membership.php"><i class="far fa-handshake fa-2x"></i></a></li>
                <li data-toggle="tooltip" title="Notice"><a href="notice.php"><i class="fas fa-bell fa-2x"></i></a></li>
                <li data-toggle="tooltip" title="Upload"><a href="index.php"><i class="fas fa-video fa-2x"></i></a></li>
                <li data-toggle="tooltip" title="Messages"><a href="messages.php"><i class="fas fa-comments fa-2x"></i></a></li>
            </ul>
        </div>
        <div class="icon col-2">
            <a href="#" class="btn-circle-border-simple"><i class="fas fa-ellipsis-h fa-2x"></i></a>
            <div>
                <ul>
                    <li><a href="pf.php">プロフィール</a></li>
                    <li><a href="#setting">設定</a></li>
                    <li><a href="logout.php">ログアウト</a></li>
                </ul>
            </div>
        </div>
        <!-- bootstrap javascriptの読み込み -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            $('[data-toggle="tooltip"]').tooltip();
        </script>
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