<?php
session_start();
// checkSessionId();

// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();
//管理者むけ動画一覧ーーーー！！！！！！！！

//2. データ表示SQL作成
$sql = 'SELECT*FROM movie_data ORDER BY indate ASC';
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
    $view .= '<video src="' . $result['movie'] . '" class="movie" controls></video>';
    $view .= '<h1>' . $result['title'] . '</h1>';
    $view .= '<h2>Present by  ' . $result['company_name']  . '</h2>';
    $view .= '<p>コメント:' . $result['comment']  . '</p>';
    $view .= '<p>連絡先：' . $result['mail']  . '</p>';
    $view .= '</li>';
  }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style>
    div {
      padding: 10px;
      font-size: 16px;
    }

    .movie {
      width: 320px;
      height: 180px;
      object-fit: contain;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">登録動画一覧</a>
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
            <a class="nav-link" href="select3_1.php">登録者一覧</a>
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
      <?= $view ?>
    </ul>
  </div>

</body>

</html>