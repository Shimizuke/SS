<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>messages</title>
    <!-- Bootstrapの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/cdc3edf2ce.js" crossorigin="anonymous"></script>
    <!-- stylesheet.cssの読み込み -->
    <link href="css/home1.css" rel="stylesheet" type="text/css">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="css/04inv_pf.css">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- chat用cssの読み込み -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header class="header row">
        <div class="logo col-3">
            <img src="img/logo1.jpg">
        </div>
        <div class="col-7 cp_navi">
            <ul>
                <li data-toggle="tooltip" title="Home"><a href="select2.php"><i class="fas fa-home"></i></a></li>
                <li data-toggle="tooltip" title="Messages"><a href="messages2.php"><i class="fas fa-comments"></i></a></li>
            </ul>
        </div>
        <div class="icon col-2">
            <a href="#" class="btn-circle-border-simple"><i class="fas fa-ellipsis-h fa-2x"></i></a>
            <div>
                <ul>
                    <li><a href="pf.php">プロフィール</a></li>
                    <li><a href="#setting">設定</a></li>
                    <li><a href="logout.php">ログアウト</a></li>
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
    <nav>
        <div class="cp_navi">
            <ul>

            </ul>
        </div>
    </nav>

    <div class="icon float-right">
        <a href="#" class="btn-circle-border-simple">ICON</a>
        <div>
            <ul>
                <li><a href="pf.php">プロフィール</a></li>
                <li><a href="#setting">設定</a></li>
                <li><a href="logout.php">ログアウト</a></li>
            </ul>
        </div>
    </div>

    </header>
    <main>
        <div class="container">
            　　　<div class="messaging">
                　　　<div class="inbox_msg">
                    　　　<div class="inbox_people">
                        <div class="headind_srch">
                            <div class="recent_heading">
                                <h4>Recent</h4>
                            </div>
                            <div class="srch_bar">
                                <div class="stylish-input-group">
                                    <input type="text" class="search-bar" placeholder="Search">
                                    <span class="input-group-addon">
                                        <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                    </span> </div>
                            </div>
                        </div>
                        <div class="inbox_chat">
                            <div class="chat_list active_chat">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="chat_ib">
                                        <h5>志水　敬一郎 <span class="chat_date">Dec 25</span></h5>
                                        <p>ありがとうございます！よろしくお願いします。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="chat_ib">
                                        <h5>Mana Shigematsu <span class="chat_date">Dec 25</span></h5>
                                        <p>テストで今週は忙しいです。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="chat_ib">
                                        <h5>古賀　祐介<span class="chat_date">Dec 25</span></h5>
                                        <p>次のDJライブについてのお知らせなのですが…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="chat_ib">
                                        <h5>湊谷　光博<span class="chat_date">Dec 25</span></h5>
                                        <p>卒業制作のデプロイのことですね</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="chat_ib">
                                        <h5>佐瀬　三紗 <span class="chat_date">Dec 25</span></h5>
                                        <p>おなかがすきました</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="chat_ib">
                                        <h5>長淵　優希 <span class="chat_date">Dec 25</span></h5>
                                        <p>連絡失礼いたします。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="chat_ib">
                                        <h5>山田太郎 <span class="chat_date">Dec 25</span></h5>
                                        <p>デプロイのためにこんなふざけた文じゃだめっすわ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mesgs">
                        <div class="msg_history">
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p>18日14時了解いたしました！メンタリングありがとうございます！！</p>
                                        <span class="time_date"> 11:01 AM | June 9</span>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing_msg">
                                <div class="sent_msg">
                                    <p>ほーい。じゃあ18日でー</p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p>ありがとうございます！！お願いします！！！</p>
                                        <span class="time_date"> 11:01 AM | Yesterday</span>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing_msg">
                                <div class="sent_msg">
                                    <p>今日も7階でおねがいしまーす</p>
                                    <span class="time_date"> 11:01 AM | Today</span>
                                </div>
                            </div>
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p>わかりました！14時にnulab7階に向かいます！！</p>
                                        <span class="time_date"> 11:01 AM | Today</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="type_msg">
                            <div class="input_msg_write">
                                <!-- <input id="name" type="text" class="write_msg" placeholder="your name" /> -->
                                <input id="text" type="text" class="write_msg" placeholder="Type a message" />
                                <button id="send" class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                <div id="output"></div>
                            </div>
                        </div>
                    </div>
                </div>

    </main>
</body>

</html>