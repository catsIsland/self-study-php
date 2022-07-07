<?php

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST);
}

$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
  $pageFlag = 1;
}

if (!empty($_POST['btn_submit'])) {
  $pageFlag = 2;
}

?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
  </head>
  <body>
    <?php if($pageFlag === 0) : ?>
      <form method="POST" action="input.php">
        氏名：<input type="text" name="your_name">
        <br>
        メール：<input type="email" name="your_email">
        <br>
        問い合わせ内容：<textarea name="your_comment"></textarea>
        <br>
        <br>
        <input type="submit" name="btn_confirm" value="確認する">
      </form>

    <?php endif; ?>

    <?php if($pageFlag === 1) : ?>
      <form method="POST" action="input.php">
        氏名：<?php echo $_POST['your_name']; ?><br>
        メール：<?php echo $_POST['your_email']; ?><br>
        コメント：<?php echo $_POST['your_comment']; ?><br>
        <br>
        <input type="submit" name="btn_submit" value="送信する">
        <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
        <input type="hidden" name="your_email" value="<?php echo $_POST['your_email']; ?>">
        <input type="hidden" name="your_comment" value="<?php echo $_POST['your_comment']; ?>">
        
      </form>

    <?php endif; ?>

    <?php if($pageFlag === 2) : ?>
      送信しました。
    <?php endif; ?>

  </body>
</html>