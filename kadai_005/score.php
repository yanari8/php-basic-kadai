<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題</title>
</head>
<body>
    <p>
        <?php
        // 点数配列
        $score = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
        // 合計値の初期化
        $score_sum = 0;

        // 合計の計算
        for ($i=0; $i <= 9 ; $i++) { 
            // echo $score[$i]."<br>" ;　確認用
            $score_sum += $score[$i] ;
        }
        // 平均の計算
        $score_ave = $score_sum / 10;
        // 出力
        echo "平均点：{$score_ave}";

        ?>
    </p>
</body>
</html>