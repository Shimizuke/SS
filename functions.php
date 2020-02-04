<?php
// 共通で使うものを別ファイルにしておきましょう。

// DB接続関数（PDO）
function connectToDb()
{
  // // ★localhost向け
  // $db = 'mysql:dbname=gsacfd04_09;charset=utf8;port=3306;host=localhost';
  // $user = 'root';
  // $pwd = '';
  // ★外部サーバー向け
  $db = 'mysql:dbname=df907d0213a8bcd8564ed251a8c08f27;
         charset=utf8;port=3306;host=mysql-1.mc.lolipop.lan';
  $user = 'df907d0213a8bcd8564ed251a8c08f27';
  $pwd = 'Anchor.xa123';
  try {
    return new PDO($db, $user, $pwd);
  } catch (PDOException $e) {
    exit('dbError:' . $e->getMessage());
  }
}

// SQL処理エラー
function showSqlErrorMsg($stmt)
{
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
}

// SESSIONチェック＆リジェネレイト
function checkSessionId()
{
  // ログイン失敗時の処理（ログイン画面に移動セッションが一致しないorセッションidがない）
  // ログイン成功時の処理（一覧画面に移動）
  if (!isset($_SESSION['session_id']) || $_SESSION['session_id'] != session_id()) {
    header('Location:login.php');
  } else {
    session_regenerate_id(true);
    $_SESSION['session_id'] = session_id();
  }
}

// menuを決める
function menu()
{
  $menu = '<li class="nav-item"><a class="nav-link" href="index.php">todo登録</a></li><li class="nav-item"><a class="nav-link" href="select.php">todo一覧</a></li>';
  $menu = '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
  return $menu;
}
