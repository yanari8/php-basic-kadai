<?php
session_start();

$name = isset($_SESSION['name']) ? $_SESSION['name'] : '名無し' ;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員情報入力フォーム</title>
</head>
<body>
    <h2><?php echo $name; ?>様の登録が完了しました。</h2>
    <p>社員情報がデータベースに保存されました。</p>
    <button id="back-btn" onclick="location.href='form.php';">戻る</button>

    <?php
    //セッション変数を初期化
    $_SESSION = array(); 
    
    // セッションを終了
    session_destroy();
    ?>

</body>
</html>