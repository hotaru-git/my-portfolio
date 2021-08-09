<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>メール送信完了通知画面</title>
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
  <div id="wrapper">
    <header id="header">
        <nav>
            <ul>
                <li><a href="./" class="icon solid fa-info-circle">back</a></li>
                <li><a href="https://hotarulog.com" class="icon solid fa-info-circle">Blog</a></li>
                <li><a href="./search.html" class="icon solid fa-info-circle">Service</a></li>
            </ul>
        </nav>
    </header>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = $_POST['to'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $your_address = $_POST['your_address'];
      
      if(mb_send_mail($to, $title, $content, $your_address)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };
    ?>
  </div>
  </body>
</html>