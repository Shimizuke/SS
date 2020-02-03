<?php
// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();

session_start();
// 入力チェック

//var_dump($POST);
$company_id = $_SESSION['id'];

//POSTデータ取得
$id     = $_POST['id'];
$company_name = $_POST['company_name'];
$title = $_POST['title'];
$comment = $_POST['comment'];
$mail = $_POST['mail'];


//データ登録SQL作成
// 楽曲URLの入れ方わかったらいろいろ付け加えること
$sql = 'UPDATE movie_data SET company_name=:a1,title=:a2,comment=:a3,mail=:a4 WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $company_name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $title, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: select.php');
}
