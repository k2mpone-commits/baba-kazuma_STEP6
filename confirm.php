<?php
// POSTメソッド以外でアクセスされた場合は contact.php にリダイレクト
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$post = filter_input_array(INPUT_POST, $_POST);

// データの受け取りとエスケープ処理
$name = $post['name'] ?? '';
$companyName = $post['companyName'] ?? '';
$email = $post['email'] ?? '';
$age = $post['age'] ?? '';
$message = $post['message'] ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問合せフォーム-確認画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h2>お問合せフォーム-確認画面</h2>
  </header>
  <aside>
    <nav>
      <ul>
        <li><a href="index.php">トップページ</a></li>
        <li><a href="about.php">人気投稿</a></li>
        <li><a href="recommend_item.php">エンジニアおすすめ商品</a></li>
        <li><a href="recommend_article.php">エンジニアおすすめ記事</a></li>
        <li><a href="post.php">投稿ページ</a></li>
      </ul>
    </nav>
  </aside>
  <main>
    <form action="send.php" method="post">
      <!-- 次の画面（send.php）へデータを引き渡すためのhiddenフィールド -->
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">

      <table>
        <tr>
          <th>お名前</th>
          <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>会社名</th>
          <td><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>年齢</th>
          <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>お問い合わせ内容</th>
          <td><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></td>
        </tr>
      </table>

      <p>
        <input type="submit" value="送信">
        <!-- 戻るボタンは history.back を指定 -->
        <input type="button" value="戻る" onclick="history.back();">
      </p>
    </form>
  </main>
</body>
</html>
