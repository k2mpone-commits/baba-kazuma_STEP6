<?php
// POSTメソッド以外でアクセスされた場合は contact.php にリダイレクト
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$post = filter_input_array(INPUT_POST, $_POST);

$name = $post['name'] ?? '';
$companyName = $post['companyName'] ?? '';
$email = $post['email'] ?? '';
$age = $post['age'] ?? '';
$message = $post['message'] ?? '';

// メール送信の設定
$to = 'info@example.com'; // 任意の受信メールアドレス
$subject = 'お問い合わせがありました';
$body = "名前: {$name}\n会社名: {$companyName}\nメールアドレス: {$email}\n年齢: {$age}\nお問い合わせ内容:\n{$message}";
$headers = "From: {$email}";

// メール送信の実行と分岐
$mail_result = mail($to, $subject, $body, $headers);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム-送信完了画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>お問合せフォーム-送信完了画面</h1>

    <?php if ($mail_result): ?>
      <p style="color: green; font-weight: bold;">お問い合わせが送信されました。ありがとうございます！</p>
    <?php else: ?>
      <p style="color: red; font-weight: bold;">メールの送信に失敗しました。しばらく経ってから再度お試しください。</p>
    <?php endif; ?>

    <p>
      <!-- confirm.php に遷移するリンク -->
      <a href="confirm.php">お問い合わせフォームに戻る</a>
    </p>
  </main>
</body>
</html><?php
// POSTメソッド以外でアクセスされた場合は contact.php にリダイレクト
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$post = filter_input_array(INPUT_POST, $_POST);

$name = $post['name'] ?? '';
$companyName = $post['companyName'] ?? '';
$email = $post['email'] ?? '';
$age = $post['age'] ?? '';
$message = $post['message'] ?? '';

// メール送信の設定
$to = 'info@example.com'; // 任意の受信メールアドレス
$subject = 'お問い合わせがありました';
$body = "名前: {$name}\n会社名: {$companyName}\nメールアドレス: {$email}\n年齢: {$age}\nお問い合わせ内容:\n{$message}";
$headers = "From: {$email}";

// メール送信の実行と分岐
$mail_result = mail($to, $subject, $body, $headers);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム-送信完了画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>お問合せフォーム-送信完了画面</h1>

    <?php if ($mail_result): ?>
      <p style="color: green; font-weight: bold;">お問い合わせが送信されました。ありがとうございます！</p>
    <?php else: ?>
      <p style="color: red; font-weight: bold;">メールの送信に失敗しました。しばらく経ってから再度お試しください。</p>
    <?php endif; ?>

    <p>
      <!-- confirm.php に遷移するリンク -->
      <a href="confirm.php">お問い合わせフォームに戻る</a>
    </p>
  </main>
</body>
</html>
