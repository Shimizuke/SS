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

<body>

  <header class="header">
    <div class="logo">
      <img src="img/logo1.jpg">
    </div>
    <nav>
      <div class="cp_navi">
        <ul>
          <li><a href="pf.php"><i class="fas fa-home"></i> Home</a></li>
          <li>
            <a href="select.php"><i class="fas fa-chalkboard-teacher"></i> Products</a>
          </li>
          <li><a href="membership.php"><i class="far fa-handshake"></i> Membership</a></li>
          <li><a href="notice.php"><i class="fas fa-bell"></i> Notice</a></li>
          <li><a href="#"><i class="fas fa-video"></i> Upload</a></li>
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
  <main class="edit_form">
    <form method="post" action="update.php" enctype="multipart/form-data" style="width:70%;">
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