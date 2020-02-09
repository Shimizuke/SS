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
  <title>Startup Station</title>
  <!-- Bootstrapの読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- fontawsomeの読み込み -->
  <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
  <!-- stylesheet.cssの読み込み -->
  <link href="css/home1.css" rel="stylesheet" type="text/css">

</head>

<header class="header row">
  <div class="logo col-3">
    <img src="img/logo1.jpg">
  </div>
  <div class="col-7 cp_navi">
    <ul>
      <li data-toggle="tooltip" title="Home"><a href="01home.php"><i class="fas fa-home fa-2x"></i></a></li>
      <li data-toggle="tooltip" title="Products"><a href="01movie_ev.php"><i class="fas fa-chalkboard-teacher fa-2x"></i></a></li>
      <li data-toggle="tooltip" title="Membership"><a href="01membership.php"><i class="far fa-handshake fa-2x"></i></a></li>
      <li data-toggle="tooltip" title="Notice"><a href="01notice.php"><i class="fas fa-bell fa-2x"></i></a></li>
      <li data-toggle="tooltip" title="Upload"><a href="01movie_upload.php"><i class="fas fa-video fa-2x"></i></a></li>
      <li data-toggle="tooltip" title="Messages"><a href="01messages.php"><i class="fas fa-comments fa-2x"></i></a></li>
    </ul>
  </div>
  <div class="icon col-2">
    <a href="#" class="btn-circle-border-simple"><i class="fas fa-ellipsis-h fa-2x"></i></a>
    <div>
      <ul>
        <li><a href="01profile.php">プロフィール</a></li>
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

<body>
  <main class="edit_form">
    <form method="post" action="01update.php" enctype="multipart/form-data" style="width:70%;">
      <div class=" form-group">
        <label for="company_name">会社名</label>
        <input type="text" name="company_name" class="form-control" id="company_name" value="<?= $rs['company_name'] ?>">
      </div>
      <div class="form-group">
        <label for="company_name">タイトル</label>
        <input type="text" name="title" class="form-control" id="company_name" value="<?= $rs['title'] ?>">
      </div>
      <div class="form-group">
        <label for="company_name">コメント</label>
        <input type="text" name="comment" class="form-control" id="company_name" value="<?= $rs['comment'] ?>">
      </div>
      <div class="form-group">
        <label for="company_name">連絡先</label>
        <input type="text" name="mail" class="form-control" id="company_name" value="<?= $rs['mail'] ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <!-- idは変えたくない = ユーザーから見えないようにする-->
      <input type="hidden" name="id" value="<?= $rs['id'] ?>">
    </form>
  </main>
</body>

</html>