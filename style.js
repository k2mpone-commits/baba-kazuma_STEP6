document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  if (form) {
    form.addEventListener("submit", function (e) {
      const name = document.getElementById("name").value.trim();
      const companyName = document.getElementById("companyName").value.trim();
      const email = document.getElementById("email").value.trim();
      const age = document.getElementById("age").value.trim();
      const message = document.getElementById("message").value.trim();

      // 設問10・11：未入力項目がある場合は送信を中止しエラーメッセージを表示
      if (!name || !companyName || !email || !age || !message) {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        e.preventDefault(); // 送信をキャンセル
        return;
      }

      // 設問12：仕様書のイメージ画像（確認アラート）に完全に合わせた文言
      const confirmMsg =
        "下記の内容を本当に送信しますか？\n\n" +
        "お名前 ➡ " +
        name +
        "\n" +
        "会社名 ➡ " +
        companyName +
        "\n" +
        "メールアドレス ➡ " +
        email +
        "\n" +
        "年齢 ➡ " +
        age +
        "\n" +
        "お問い合わせ内容 ➡ " +
        message;

      // confirm関数を使用して確認ダイアログを表示。「キャンセル」が押された場合は送信を中止する
      if (!window.confirm(confirmMsg)) {
        e.preventDefault();
      }
    });
  }

  // 設問13：フッターの背景色を4色で循環させるボタンの実装
  const colorButton = document.querySelector("footer button");
  const footerElement = document.querySelector("footer");
  const colors = ["blue", "red", "yellow", "gray"];
  let currentIndex = 0;

  if (colorButton && footerElement) {
    colorButton.addEventListener("click", function () {
      currentIndex = (currentIndex + 1) % colors.length;
      footerElement.style.backgroundColor = colors[currentIndex];
    });
  }
});
