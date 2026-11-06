<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <headeer>
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
    <!-- 確認画面（confirm.php）へPOSTメソッドでデータを送信するフォーム -->
    <form action="confirm.php" method="post">
      <table>
        <tr>
          <th>お名前</th>
          <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
          <th>会社名</th>
          <td><input type="text" id="company-name" name="company-name" required></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
          <th>年齢</th>
          <td><input type="text" id="age" name="age" required></td>
        </tr>
        <tr>
          <th>お問い合わせ内容</th>
          <td><textarea name="message" rows="5" required></textarea></td>
        </tr>
      </table>

      <!--送信ボタン-->
      <p>
        <input type="submit" value="送信">
      </p>
    </form>
  </main>

  <footer>
    <p>横のボタンを押すとfooterの背景色が変わります。</p>
    <button type="button">押してみてね！</button>
  </footer>
<!-- scriptt（背景色変更などの制御用）-->
  <script src="script.js"></script>
</body>
</html>
