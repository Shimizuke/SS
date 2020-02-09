<?php
session_start();
$kid = $_SESSION["id"];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>動画投稿</title>
  <!-- Bootstrapの読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- fontawsomeの読み込み -->
  <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
  <!-- stylesheet.cssの読み込み -->
  <link href="css/home1.css" rel="stylesheet" type="text/css">
  <link href="css/upload.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/04inv_pf.css">
</head>
<header class="header row">
  <div class="logo col-4">
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
  <div class="icon col-1">
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
  <main>
    <div class="container">
      <!--タブ-->
      <ul class="tab-group">
        <li class="tab is-active">アップロード</li>
        <li class="tab11">詳細</li>
        <li class="tab22">公開設定</li>
      </ul>

      <!--タブを切り替えて表示するコンテンツ-->
      <form class="panel-group" action="01insert.php" method="post" enctype="multipart/form-data">
        <div class="panel is-show">動画をMP４ファイルでアップロードしてください
          <label id='open-file'>
            動画ファイルを開く
            <input id='file-input' name='movie' type='file' accept=".mp4">
          </label>
          <p>※一度投稿した動画ファイルは変更できません</p>
          <br>
          <li class="btn btn-info" id="tab1">次へ</li>
        </div>
        <div class="panel1">
          <label>タイトル</label>
          <input type="text" name="title" class="form-control">
          <label>会社名</label>
          <input type="text" name="company_name" class="form-control">

          <label>動画概要</label>
          <input type="text" name="comment" class="form-control">

          <label>キーワード</label>
          <input type="serch" class="form-control">

          <li class="btn btn-info" id="tab2">次へ</li>
        </div>
        <div class="panel2">
          <label>サムネイル</label>
          <input type="file" class="form-control">
          <br>
          <label>公開設定</label><br>
          <input type="radio">公開<br>
          <input type="radio">メンバーシップ公開<br>
          <input type="radio">非公開<br>


          <button type="submit" class="btn btn-primary">投稿</button>

        </div>
      </form>

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
  <script>
    jQuery(function($) {
      $('#tab1').click(function() {
        $('.is-active').removeClass('is-active');
        $('.tab11').addClass('is-active');
        $('.is-show').removeClass('is-show');
        // クリックしたタブからインデックス番号を取得
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.panel1').addClass('is-show');
      });
      $('#tab2').click(function() {
        $('.is-active').removeClass('is-active');
        $('.tab22').addClass('is-active');
        $('.is-show').removeClass('is-show');
        // クリックしたタブからインデックス番号を取得
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.panel2').addClass('is-show');
      });
    });
  </script>

</body>

</html>

<!-- <form action="insert.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="company_name">会社名</label>
    <input type="text" name="company_name" class="form-control" id="company_name">
  </div>
  <div class="form-group">
    <label for="company_name">タイトル</label>
    <input type="text" name="title" class="form-control" id="company_name">
  </div>
  <div class="form-group">
    <label for="company_name">コメント</label>
    <input type="text" name="comment" class="form-control" id="company_name">
  </div>
  <div class="form-group">
    <label for="company_name">連絡先</label>
    <input type="text" name="mail" class="form-control" id="company_name">
  </div>
  <label id='open-file'>
    動画ファイルを開く
    <input id='file-input' name='movie' type='file' accept=".mp4">
  </label>
  <p>※一度投稿した動画ファイルは変更できません</p>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</body>

</html> -->