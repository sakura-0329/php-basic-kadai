<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
 </head>
 
 <body>
     <p>
         <?php
         $user_names = ['名前' => '玉ねぎ','値段' => '200', '産地' => '北海道'];
 
        // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
        foreach ($user_names as $key => $value) {
        echo "{$key}:{$value}<br>";
         }
         ?>
        <br>
    
         <?php
         $user_names = ['id' => '1','名前' => '侍太郎', '年齢' => '30'];
 
        // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
        foreach ($user_names as $key => $value) {
        echo "{$key}:{$value}<br>";
         }
         ?>

         
     </p>
 </body>
 
 </html>