<?php
$errors = [];
$post = [
    'name' => '',
    'companyName' => '',
    'email' => '',
    'age' => '',
    'message' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = filter_input_array(INPUT_POST, $_POST);
  if (empty($post['name'])) {
    $errors['name'] = 'blank';
  }
  if (empty($post['companyName'])) {
    $errors['companyName'] = 'blank';
  }
  if (empty($post['email'])) {
    $errors['email'] = 'blank';
  }
  if (empty($post['age'])) {
    $errors['age'] = 'blank';
  }
  if (empty($post['message'])) {
    $errors['message'] = 'blank';
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h2>お問い合わせフォーム</h2>
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
    <form action="confirm.php" method="post" novalidate>
      <table>
        <tr>
          <th>お名前</th>
          <td>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($post['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            <?php if (!empty($errors['name']) && $errors['name'] === 'blank'): ?>
              <p class="error-msg">※お名前を入力してください</p>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>会社名</th>
          <td>
            <input type="text" id="companyName" name="companyName" value="<?php echo htmlspecialchars($post['companyName'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            <?php if (!empty($errors['companyName']) && $errors['companyName'] === 'blank'): ?>
              <p class="error-msg">※会社名を入力してください</p>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($post['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            <?php if (!empty($errors['email']) && $errors['email'] === 'blank'): ?>
              <p class="error-msg">※メールアドレスを入力してください</p>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>年齢</th>
          <td>
            <input type="text" id="age" name="age" value="<?php echo htmlspecialchars($post['age'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            <?php if (!empty($errors['age']) && $errors['age'] === 'blank'): ?>
              <p class="error-msg">※年齢を入力してください</p>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容</th>
          <td>
            <textarea id="message" name="message" rows="5"><?php echo htmlspecialchars($post['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
            <?php if (!empty($errors['message']) && $errors['message'] === 'blank'): ?>
              <p class="error-msg">※お問い合わせ内容を入力してください</p>
            <?php endif; ?>
          </td>
        </tr>
      </table>

      <p>
        <input type="submit" value="送信">
      </p>
    </form>
  </main>

  <footer>
    <p>横のボタンを押すとfooterの背景色が変わります。</p>
    <button type="button">押してみてね！</button>
  </footer>

  <script src="style.js"></script>
</body>
</html>
