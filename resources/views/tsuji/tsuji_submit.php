<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UFT-8">
        <title>
            submit_result
        </title>
        <style type="text/css">
            .main_label{
                width: 8%;
                margin-top: 7px;
                margin-left: 4%;
                float: left;
            }
            .main_input{
                width: 88%;
                margin-top: 7px;
                float: left;
            }
            .link{
                width: 16%;
                margin-top: 7px;
                margin-left: 4%;
            }
            p.example { color: rgb(0, 174, 255); }    
        </style>
    </head>
    <body>
        <!-- タイトルタブ書き換えスクリプト -->
        <script>
            // URLからgetパラメータ取得
            var queryString = window.location.search;
            // オブジェクト作成
            var queryObject = new Object();
            
            if(queryString){
                // getパラメータの？を取り除く
                queryString = queryString.substring(1);
                // 複数あるとき&で区切って配列を生成
                var parameters = queryString.split('&');

                for (var i = 0; i < parameters.length; i++) {
                    var elements = parameters[i].split('=');

                    var paramName = decodeURIComponent(elements[0]);
                    var paramValue = decodeURIComponent(elements[1]);
                    
                    if(paramName == 'title'){
                        document.title = paramValue;
                    }
                    queryObject[paramName] = paramValue;
                }
            }
        </script>
        <section>
            <?php include('./nav_bar.html'); ?>
        </section>
        <section>
            <label class="main_label">本文</label>
            <div class="main_input">
                <?php
                    $comment = $_GET["comment"];
                    echo $comment;
                ?>
            </div>
        </section>
        </br>
        <section>
            <a class="link" href=./tsuji_index.php>辻本のフォームへ戻る</a>
            </br>
            <a class="link" href=../index.html>トップページへ戻る</a>
        </section>
    </body>
</html>