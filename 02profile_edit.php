<?php
session_start();
// checkSessionId();
// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();
$kid = $_SESSION["id"];
//起業家PF
//1. id 読み込み
$sql = 'SELECT*FROM user_table WHERE id=:kid;';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':kid', $kid, PDO::PARAM_STR);
$status = $stmt->execute();

$view = '';
$view2 = '';
$view3 = '';
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view = $result['namae'];
        $view2 = $result['pro'];
        $view3 = $result['detail'];
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Startup-station</title>
    <!-- Bootstrapの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- stylesheet.cssの読み込み -->
    <link href="css/05inv_pf_edit.css" rel="stylesheet">
    <link href="css/home1.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/products.css" rel="stylesheet" type="text/css"> -->
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
</head>
<header class="header row">
    <div class="logo col-3">
        <img src="img/logo1.jpg">
    </div>
    <div class="col-7 cp_navi">
        <ul>
            <li data-toggle="tooltip" title="Home"><a href="02movie_list.php"><i class="fas fa-home fa-2x"></i></a></li>
            <li data-toggle="tooltip" title="Messages"><a href="02messages.php"><i class="fas fa-comments fa-2x"></i></a></li>
        </ul>
    </div>
    <div class="icon col-2">
        <a href="#" class="btn-circle-border-simple"><i class="fas fa-ellipsis-h fa-2x"></i></a>
        <div>
            <ul>
                <li><a href="02profile.php">プロフィール</a></li>
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
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="img/16testimonials-2.jpg" alt="" />
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="profile-head">
                            <h4>
                                SeeD Company
                            </h4>
                            <h6>
                                Web Developer and Designer
                            </h6>
                            <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="button" class="profile-edit-btn" name="btnAddMore" value="Finished" onClick="location.href='02profile.php'" />
                        <!-- <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-primary">メンバーシップ登録</button>
          </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <h5>WORK LINK</h5>
                            <p>Website Link</p>
                            <p>Profile-1</p>
                            <p>Profile-2</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <input type="text" placeholder="SeeD tradition to Edea"> -->
                                        <p>No.123</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <input type="text" placeholder="SeeD tradition to Edea"> -->
                                        <p>Squall Leonhart</p>
                                    </div>
                                </div>
                                <!-- <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6"> -->
                                <!-- <input type="text" placeholder="SeeD tradition to Edea"> -->
                                <!-- <p>balamb_garden@gmail.com</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Phone</label>
                </div>
                <div class="col-md-6"> -->
                                <!-- <input type="text" placeholder="SeeD tradition to Edea"> -->
                                <!-- <p>123 456 7890</p>
                </div>
              </div> -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <input type="text" placeholder="SeeD tradition to Edea"> -->
                                        <p>SeeD tradition to Edea</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                    </div>
                                    <!-- <div class="col-md-6"><input type="text" placeholder="Expert"> -->
                                    <p>Expert</p>
                                </div>
                            </div>
                            <!-- <div class="row">
                <div class="col-md-6">
                  <label>Hourly Rate</label>
                </div>
                <div class="col-md-6">
                  <p>10$/hr</p>
                </div>
              </div> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-6">
                                    <!-- <input type="text" placeholder="230"> -->
                                    <p>230</p>
                                </div>
                            </div>
                            <!-- <div class="row">
                <div class="col-md-6">
                  <label>English Level</label>
                </div>
                <div class="col-md-6">
                  <p>Expert</p>
                </div>
              </div> -->
                            <!-- <div class="row">
              <div class="col-md-6">
                <label>Availability</label>
              </div>
              <div class="col-md-6"> -->
                            <!-- <input type="text" placeholder="6 months"> -->
                            <!-- <p>6 months</p>
              </div>
            </div> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Your Bio</label>
                                </div>
                                <div class="col-md-6">
                                    <!-- <input type="text" placeholder="Your detail description"> -->
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <iframe class="card-img-top" style="height: 225px; width: 100%; display: block;" src="https://www.youtube.com/embed/q5clO47zeT0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                <div class="card-body">
                                    <h4 class="card-title">㈱Shimizu鮮魚</h4>
                                    <p class="card-text">最高の仕立て魚を扱う店を知るツールを</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href=""><button type="button" class="btn btn-sm btn-outline-secondary">視聴</button></a>
                                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <iframe class="card-img-top" style="height: 225px; width: 100%; display: block;" src="https://www.youtube.com/embed/n7RhAmpehOw" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                <div class="card-body">
                                    <h4 class="card-title">ぎょーむ効率課</h4>
                                    <p class="card-text">行政のアナログな事務を効率化</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href=""> <button type="button" class="btn btn-sm btn-outline-secondary">視聴</button></a>
                                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <iframe class="card-img-top" style="height: 225px; width: 100%; display: block;" src="https://www.youtube.com/embed/ABcoZX9rcfo" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                <div class="card-body">
                                    <h4 class="card-title">shimisuzu薬品㈱</h4>
                                    <p class="card-text">化学反応経路の自動探索</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href=""> <button type="button" class="btn btn-sm btn-outline-secondary">視聴</button></a>
                                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!-- https://bootsnipp.com/snippets/K0ZmK -->
    <script>
        // https://gihyo.jp/design/serial/01/jquery-site-production/0017
        jQuery(function($) {
            $('p').click(function() {
                //classでonを持っているかチェック
                if (!$(this).hasClass('on')) {
                    //編集可能時はclassでonをつける
                    $(this).addClass('on');
                    var txt = $(this).text();
                    //テキストをinputのvalueに入れてで置き換え
                    $(this).html('<input type="text" value="' + txt + '" />');
                    //同時にinputにフォーカスをする
                    $('p > input').focus().blur(function() {
                        var inputVal = $(this).val();
                        //もし空欄だったら空欄にする前の内容に戻す
                        if (inputVal === '') {
                            inputVal = this.defaultValue;
                        };
                        //編集が終わったらtextで置き換える
                        $(this).parent().removeClass('on').text(inputVal);
                    });
                };
            });
        });

        jQuery(function($) {
            $('h6').click(function() {
                //classでonを持っているかチェック
                if (!$(this).hasClass('on')) {
                    //編集可能時はclassでonをつける
                    $(this).addClass('on');
                    var txt = $(this).text();
                    //テキストをinputのvalueに入れてで置き換え
                    $(this).html('<input type="text" value="' + txt + '" />');
                    //同時にinputにフォーカスをする
                    $('h6 > input').focus().blur(function() {
                        var inputVal = $(this).val();
                        //もし空欄だったら空欄にする前の内容に戻す
                        if (inputVal === '') {
                            inputVal = this.defaultValue;
                        };
                        //編集が終わったらtextで置き換える
                        $(this).parent().removeClass('on').text(inputVal);
                    });
                };
            });
        });

        jQuery(function($) {
            $('h4').click(function() {
                //classでonを持っているかチェック
                if (!$(this).hasClass('on')) {
                    //編集可能時はclassでonをつける
                    $(this).addClass('on');
                    var txt = $(this).text();
                    //テキストをinputのvalueに入れてで置き換え
                    $(this).html('<input type="text" value="' + txt + '" />');
                    //同時にinputにフォーカスをする
                    $('h4 > input').focus().blur(function() {
                        var inputVal = $(this).val();
                        //もし空欄だったら空欄にする前の内容に戻す
                        if (inputVal === '') {
                            inputVal = this.defaultValue;
                        };
                        //編集が終わったらtextで置き換える
                        $(this).parent().removeClass('on').text(inputVal);
                    });
                };
            });
        });
    </script>
</body>

</html>