<?php
// 関数ファイルの読み込み
include('functions.php');
$pdo = connectToDb();
// checkSessionId();
// getで送信されたidを取得
$id = $_GET['id'];

//データ登録SQL作成，指定したidのみ表示する
$sql = 'SELECT * FROM movie_data WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status == false) {
    // エラーのとき
    showSqlErrorMsg($stmt);
} else {
    // エラーでないとき
    $rs = $stmt->fetch();
    // fetch()で1レコードを取得して$rsに入れる
    // $rsは配列で返ってくる．$rs["id"], $rs["task"]などで値をとれる
    // var_dump()で見てみよう
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Startup Stations</title>
    <!-- Bootstrapの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
    <!-- stylesheet.cssの読み込み -->
    <link href="css/home1.css" rel="stylesheet" type="text/css">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="css/03movie_play.css">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- chat用cssの読み込み -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">

</head>
<!-- bootstrap sampleページ -->

<body>
    <header class="header">
        <div class="logo">
            <img src="img/logo1.jpg">
        </div>
        <nav>
            <div class="cp_navi">
                <ul>
                    <li><a href="select2.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="messages2.php"><i class="fas fa-comments"></i> Messages</a></li>
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

    <main role="main">

        <!-- 16:9 aspect ratio  mx-auto:ブロック中央寄せ 通常col-11、768px以上col-9 margin-top:4rem-->
        <div class="mx-auto col-11 col-lg-8 mt-4" class="box">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $rs['movie'] ?>"></iframe>
            </div>
            <div class="card-body">
                <h3 class="card-title"><?= $rs['title'] ?></h3>
                <p class="card-text"><?= $rs['company_name'] ?></p>
                <p class="card-text"><?= $rs['comment'] ?></p>
                <div class="d-flex justify-content-between align-items-center float-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-md btn-outline-primary">メンバーシップ登録</button>
                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                </div>
            </div>
        </div>
        </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>


        <svg xmlns="http://www.w3.org/2000/svg" width="467" height="225" viewBox="0 0 467 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
            <defs>
                <style type="text/css"></style>
            </defs><text x="0" y="23" style="font-weight:bold;font-size:23pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text>
        </svg>
</body>

</html>