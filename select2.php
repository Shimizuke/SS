<?php
session_start();
// checkSessionId();
// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();

//投資家様むけーーーー！！！！！！！！

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
    $view .= '<div class="col-md-4">';
    $view .= '<div class="card mb-4 box-shadow">';
    $view .= '<iframe class="card-img-top" style="height: 225px; width: 100%; display: block;"src="' . $result['movie'] . '"allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen=""></iframe>';
    $view .= '<div class="card-body"><h4 class="card-title">' . $result['company_name'] . '</h4>';
    $view .= '<p class="card-text">' . $result['title'] . '</p>';
    $view .= '<h2>Present by  ' . $result['company_name']  . '</h2>';
    $view .= ' <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="movie_play.php?id=' . $result['id'] . '"><button type="button"
                                                class="btn btn-sm btn-outline-secondary">視聴</button></a>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>';
  }
}

?>




<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>投資家家HOME</title>
  <!-- Bootstrapの読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- fontawsomeの読み込み -->
  <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
  <!-- stylesheet.cssの読み込み -->
  <link href="css/home1.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/02movies_list.css">
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
          <li><a href="messages2.php"><i class="fas fa-comments"></i> Messages</a></li>
        </ul>
      </div>
    </nav>

    <div class="icon float-right">
      <a href="#" class="btn-circle-border-simple">ICON</a>
      <div>
        <ul>
          <li><a href="pf2.php">プロフィール</a></li>
          <li><a href="#setting">設定</a></li>
          <li><a href="logout.php">ログアウト</a></li>
        </ul>
      </div>
    </div>

  </header>
  <main>
    <section class="jumbotron text-center" style="padding: 0px 32px;">
      <div class="container">
        <h1 class="jumbotron-heading,my-lg-0">新着動画一覧</h1>
        <!-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it
                    entirely.</p> -->
        <p>
          <!--データベースから取得したデータをasc順に掲載する -->
          <a href="#" class="btn btn-primary my-2">新着順</a>
          <a href="#" class="btn btn-secondary my-2">急上昇順</a>
        </p>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">


          <?= $view ?>
        </div>
      </div>
    </div>
  </main>
</body>

</html>