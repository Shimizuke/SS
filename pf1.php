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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
    <!-- stylesheet.cssの読み込み -->
    <link href="css/home1.css" rel="stylesheet" type="text/css">
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
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li>
                        <a href="select.php"><i class="fas fa-chalkboard-teacher"></i> Products</a>
                    </li>
                    <li><a href="membership.php"><i class="far fa-handshake"></i> Membership</a></li>
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
        <h1>ここは起業家様向けページです。</h1>
        <h2><?= $view ?>会社さん、おかえりなさい</h2>
    </main>
</body>

</html>