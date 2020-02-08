<?php
session_start();
// checkSessionId();
// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();

$kid = $_SESSION["id"];
//起業家PF
//1. DB接続

$sql = 'SELECT*FROM user_table WHERE id=:kid;';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':kid', $kid, PDO::PARAM_STR);
$status = $stmt->execute();

$view = '';
$view2 = '';
$view3 = '';
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view = $result['namae'];
        $view2 = $result['pro'];
        $view3 = $result['detail'];
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>起業家HOME</title>
    <!-- Bootstrapの読み込み -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
    <!-- stylesheet.cssの読み込み -->
    <link href="css/home1.css" rel="stylesheet" type="text/css">
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
                <li data-toggle="tooltip" title="Products">
                    <a href="select.php"><i class="fas fa-chalkboard-teacher fa-2x"></i></a>
                </li>
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
        <h1>ここは起業家様向けページです。</h1>
        <h2><?= $view ?>会社さん、おかえりなさい</h2>
    </main>

</body>

</html>