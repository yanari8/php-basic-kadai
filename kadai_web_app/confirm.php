<?php
session_start();

// POSTリクエストから入力データを取得
// $_POSTは、PHPプログラムのどこでも使えるスーパーグローバル変数
// $_POSTは連想配列で、キーの内容は、先ほど各フォームのタグに指定したname属性の値
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];

// エラーメッセージを格納する配列
$errors = [];

// 名前のバリデーション
if (empty($name)){
    $errors[]='お名前を入力してください。';
}

// 年齢のバリデーション
if (empty($age)){
    $errors[]='年齢を入力してください。';
}elseif (!ctype_digit($age)) { // 半角数字のみ許可
    $errors[] = '年齢は半角数字で入力してください。';
} elseif ($age < 0 || $age > 100) { 
    $errors[] = '年齢は0〜100の範囲で入力してください。';
}

if (empty($errors)) {
    // セッション変数を保存
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    $_SESSION['department'] = $department;
    
    // クッキーは使用しない
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員情報入力フォーム</title>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <td>項目</td>
            <td>入力内容</td>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>
    </table>

    <p>
        <!-- javascript <button id="xxx” onclick="クリック時に行いたい処理">ボタン名</button> -->
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
    <?php
    // 入力事項にエラーがある場合の処理
    if (!empty($errors)) {
        // 配列のエラーメッセージを順番に出力
        foreach ($errors as $error) {
            echo '<font color="red">'.$error.'</font>'.'<br>';
        }

        // 確定ボタンを無効化するJavaScriptコードをブラウザ側に送信
        echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
    }
    ?>
    
</body>
</html>