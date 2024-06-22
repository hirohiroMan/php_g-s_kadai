<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- action method name -->
    <form action="create.php" method="POST">
        <fieldset>
            <legend>イベント申し込みフォーム</legend>
            <a href="read.php">一覧画面</a>
            <div>
                名前: <input type="text" name="name">
            </div>
            <div>
                tel: <input type="text" name="tel">
            </div>
            <div>
                mail: <input type="text" name="mail">
            </div>
            <div>
                住所: <input type="text" name="address">
            </div>
            <div>
                参加人数: <input type="text" name="number">
            </div>
            <div>
                参加日: <input type="date" name="deadline">
            </div>
            <div>
                <button>登録</button>
            </div>
        </fieldset>

    </form>
   
    
</body>
</html>