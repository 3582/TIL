<?php
$csv_path = getcwd() . "/data.txt";
$lines = file($csv_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// スコアが80以上の人の名前を格納する配列
$high_scores = [];

foreach ($lines as $line) {
    // 各行をカンマで分割する
    list($name, $age, $score) = explode(',', $line);
    $score = (int)$score; // スコアを整数に変換

    // スコアが80以上の場合、名前を配列に追加する
    if ($score >= 80) {
        $high_scores[] = $name;
    }
}

// 結果を表示する
echo "スコアが80以上の人:\n";
foreach ($high_scores as $name) {
    echo "- $name\n";
}
