<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
    print('PHP が実行されています！');
    echo '<br>';
    $members = [
        'name' => '本田',
        'height' => 170,
        'hobby' => 'サッカー'
    ];
     // valueのみ表示される
    foreach ($members as $member) {
        echo $member;
    };

    echo '<br>';

    // keyとvalue表示
    foreach ($members as $key => $value) {
        echo $key . 'は' . $value . 'です';
    }

    echo '<br>';
    $members_2 = [
        '本田' => [
            'name' => '本田',
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'name' => '香川',
            'height' => 170,
            'hobby' => 'サッカー'
        ]
    ];

    foreach ($members_2 as $member_1) {
        foreach ($member_1 as $member) {
            echo $member;
        };
    };
    echo '<br>';
    //
    $array = ['apple', 'banana', 'mango'];
    for($i = 0; $i < count($array); $i++){
      if($i/2 != 0){
        // break;
        // continue;
        echo ('<br>');
        echo ('あああ');
      }
      echo $array[$i];
    }
    echo '<br>';
    $j = 0;
    while($j < 5){
      echo $j;
      $j++;
    }
  ?>
</body>

</html>