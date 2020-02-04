<?php
// checkSessionId();

// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();
//管理者むけ登録者一覧！！！！！！！！

//2. データ表示SQL作成
$sql = 'SELECT*FROM user_table WHERE who=1';
$stmt = $pdo->prepare($sql);
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
    $view .= '<li class="list-group-item">';
    $view .= '<p>' . $result['namae'] . '</p>';
    $view .= '<p>id:' . $result['id']  . '</p>';
    $view .= '</li>';
  }
}
$sql = 'SELECT*FROM user_table WHERE who=2';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//3. データ表示
$view1 = '';
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  //Selectデータの数だけ自動でループしてくれる
  //http://php.net/manual/ja/pdostatement.fetch.php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view1 .= '<li class="list-group-item">';
    $view1 .= '<p>' . $result['namae'] . '</p>';
    $view1 .= '<p>id:' . $result['id']  . '</p>';
    $view1 .= '</li>';
  }
}

?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>mymusiclist</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style>
    div {
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">登録者一覧</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="select3.php">管理者トップ</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="select3_2.php">投稿動画一覧</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">ログアウト</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- 検索機能実装したい人生だった -->
  <!-- <div class="form-group">
    <label for="">keyword</label>
    <input type="text" name="keyword" class="form-control" id="keyword">
  </div> -->
  <div>
    <ul class="list-group">
      <!-- ここにDBから取得したデータを表示しよう -->
      <h2>登録企業一覧</h2>
      <?= $view ?>
    </ul>
  </div>
  <div>
    <ul class="list-group">
      <!-- ここにDBから取得したデータを表示しよう -->
      <h2>登録投資家一覧</h2>
      <?= $view1 ?>
    </ul>
  </div>

</body>

</html>