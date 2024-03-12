<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
    <p>
       <?php
      // 独自のソート関数を作成
      function sort_2way($array, $order) {
        // 引数$orderが昇順の場合
        if ($order) {
          // メッセージを表示する
          echo '昇順にソートします。<br>';

          // 引数$arrayを昇順にソート
          sort($array);
          foreach($array as $value) {
            echo "{$value}<br>";
          }
        } else {
          // メッセージを表示する
          echo '降順にソートします。<br>';

          // 引数$arrayを降順にソート
          rsort($array);
          foreach($array as $value) {
            echo "{$value}<br>";
          }
        }
      }
      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10];

      // 独自のソート関数を呼び出し、昇順に並び替える
      sort_2way($nums, TRUE);

      // 独自のソート関数を呼び出し、降順に並び替える
      sort_2way($nums, FALSE);
      ?>
    </p>
</body>
</html>
