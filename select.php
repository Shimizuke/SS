<?php
session_start();
// checkSessionId();
// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();
$kid = $_SESSION["id"];

//企業様むけーーーー！！！！！！！！

//2. データ表示SQL作成
$sql = 'SELECT*FROM movie_data WHERE company_id=:company_id;';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':company_id', $kid, PDO::PARAM_STR);
$status = $stmt->execute();

//3. データ表示
$view = '';
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  //Selectデータの数だけ自動でループしてくれる
  //http://php.net/manual/ja/pdostatement.fetch.php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<tr>';
    $view .= '<td></td><td><video src="' . $result['movie'] . '" class="video" controls></video></td>';
    $view .= '<td>' . $result['title'] . '</td>';
    $view .= '<td>' . $result['indate']  . '</td><td></td>';
    $view .= '<td><a href="detail.php?id=' . $result['id'] . '" class="badge badge-primary">Edit</a></td>';
    $view .= '<td><a href="delete.php?id=' . $result['id'] . '" class="badge badge-danger">Delete</a></td>';
    $view .= '</tr>';
  }
}

?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>自社動画一覧</title>
  <!-- Bootstrapの読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- fontawsomeの読み込み -->
  <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
  <!-- stylesheet.cssの読み込み -->
  <link href="css/home1.css" rel="stylesheet" type="text/css">
  <link href="css/products.css" rel="stylesheet" type="text/css">
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
            <a href="#"><i class="fas fa-chalkboard-teacher"> Products</i></a>
          </li>
          <li><a href="membership.php"><i class="far fa-handshake"></i> Membership</a></li>
          <li><a href="notice.php"><i class="fas fa-bell"></i> Notice</a></li>
          <li><a href="index.php"><i class="fas fa-video"></i> Upload</a></li>
          <li><a href="messages.php"><i class="fas fa-comments"></i> Messages</a></li>
        </ul>
      </div>

    </nav>
    <div class="icon">
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

  <!-- 検索機能実装したい人生だった -->
  <!-- <div class="form-group">
    <label for="">keyword</label>
    <input type="text" name="keyword" class="form-control" id="keyword">
  </div> -->
  <main>
    <div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th></th>
            <th>動画</th>
            <th>題名</th>
            <th>投稿日時</th>
            <th>いいね数</th>
          </tr>
        </thead>
        <tbody>
          <!-- ここにDBから取得したデータを表示しよう -->
          <?= $view ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>