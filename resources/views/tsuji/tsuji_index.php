<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UFT-8">
    <title>辻本のフォーム</title>
    <style type="text/css">
        .page_title{
            margin-left: 3%;
        }
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
        .button{
            margin-top: 7px;
            margin-left: 4%;
        }
        .link{
            margin-top: 7px;
            margin-left: 4%;
        }
        
        p.example { color: rgb(0, 174, 255); } 
    </style>
</head>

<body> 
    <section>
        <div>
            <?php include('./nav_bar.html'); ?>
        </div>
    </section>
    <section>
    
        <h1 class="page_title">フォームデータの送信</h1>
        <form action="./tsuji_submit.php" method="get">
            <label class="main_label">タイトル</label>
            <div class="main_input">
                <input type="text" name="title"/>
            </div>
            <br />
            <label class="main_label">本文</label>
            <div class="main_input">
                <textarea rows="5" name="comment"></textarea>
            </div>
            <br />
            <input class="link" type="submit" value="submit"/>
        </form>
    </section>
    </br>
    <section>
        <a class="link" href=../index.html>トップページへ戻る</a>
    </section>
</body>

</html>