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
    $view .= '<td><a href="01detail.php?id=' . $result['id'] . '" class="badge badge-primary">Edit</a></td>';
    $view .= '<td><a href="01movie_delete.php?id=' . $result['id'] . '" class="badge badge-danger">Delete</a></td>';
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
        <li><a href="00logout.php">ログアウト</a></li>
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