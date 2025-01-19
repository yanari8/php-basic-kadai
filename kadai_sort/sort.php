<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way(array $array , bool $order) {
            // TRUE:昇順ソート
            if ($order) {
                echo "昇順にソートします。<br>";
                sort($array);
            // FALSE:降順ソート
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }
            // 配列データ表示
            foreach ($array as $value) {
                echo "{$value}<br>";
            }
        }

        // ソート出力
        sort_2way($nums , TRUE);
        sort_2way($nums , FALSE);
        
        // エラーチェック用
        // sort_2way(2 , TRUE);
        // sort_2way($num , 1);
        ?>
    </p>
</body>
</html>