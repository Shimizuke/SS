<?php
// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();

// 入力チェック
//var_dump($POST);
if (
    !isset($_POST['lid']) || $_POST['lid'] == '' ||
    !isset($_POST['lpw']) || $_POST['lpw'] == '' ||
    !isset($_POST['who']) || $_POST['who'] == ''

) {
    exit('ParamError');
}

//POSTデータ取得
$namae = $_POST['namae'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$who = $_POST['who'];

//データ登録SQL作成
// 楽曲URLの入れ方わかったらいろいろ付け加えること
$sql = 'INSERT INTO user_table(id,namae,lid,lpw,who,life_flg)VALUES(NULL,:a1,:a2,:a3,:a4,0)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $namae, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $who, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();


//４．データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    //５．index.phpへリダイレクト
    header('Location: login.php');
}
