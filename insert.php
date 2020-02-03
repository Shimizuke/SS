<?php
session_start();
// 入力チェック

// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();

//var_dump($POST);
$company_id = $_SESSION['id'];

//POSTデータ取得
$company_name = $_POST['company_name'];
$title = $_POST['title'];
$comment = $_POST['comment'];

if (isset($_FILES['movie']) && $_FILES['movie']['error'] == 0) {
  //送信が正常

  // ファイルをアップロードしたときの処理
  $uploadedFileName = $_FILES['movie']['name'];
  $tempPathName = $_FILES['movie']['tmp_name'];
  $fileDirectoryPath = 'upload/';
  //アップロードしたファイルの情報取得
  $extension = pathinfo($uploadedFileName, PATHINFO_EXTENSION);
  $uniqueName = date('YmdHis') . md5(session_id()) . "." . $extension;
  $fileNameToSave = $fileDirectoryPath . $uniqueName;
  //File名の変更
  $movie = '';
  if (is_uploaded_file($tempPathName)) {
    if (move_uploaded_file($tempPathName, $fileNameToSave)) {
      chmod($fileNameToSave, 0644);
    } else {
      exit('ファイルの保存に失敗しました');
    }
  } else {
    exit('ファイルがアップロードされていません');
  }
  // FileUpload開始
  // FileUpload終了
} else {
  // ファイルをアップしていないときの処理
  $movie = '画像が送信されていません';
}

//データ登録SQL作成
// 楽曲URLの入れ方わかったらいろいろ付け加えること
$sql = 'INSERT INTO movie_data(id,company_name,title,comment,mail,movie,indate,company_id)VALUES(NULL,:a1,:a2,:a3,NULL,:a5,sysdate(),:a6)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $company_name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $title, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$stmt->bindValue(':a5', $fileNameToSave, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $company_id, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
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
