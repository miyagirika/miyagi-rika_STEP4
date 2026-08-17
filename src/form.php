<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- ヘッダーと見出し -->
    <h1>フォーム入力</h1>
    <form action="confirm.php" method="post">

<!-- 名前 -->
<label for="name">名前:</label>
<input type="text" id="name" name="name">
<!-- 年齢 -->
<label for="age">年齢:</label>
<input type="number" id="age" name="age" min="1" max="150">
<!-- 電話番号 -->
<label for="phone">電話番号:</label>
<input type="tel" id="phone" name="phone">
<!-- メールアドレス -->
<label for="email">メールアドレス:</label>
<input type="email" id="email" name="email">
<!-- 住所 -->
<label for="address">住所:</label>
<input type="text" id="address" name="address">
<!-- 質問 -->
<label for="question">質問:</label>
<textarea id="question" name="question"></textarea>
<!-- 性別 -->
<label for="gender">性別:</label>

<select id="gender" name="gender">
    <option value="">選択してください</option>
    <option value="男性">男性</option>
    <option value="女性">女性</option>
    <option value="その他">その他</option>
</select>

<!-- 送信ボタン -->
<button type="submit">送信</button>
</form>
</body>
</html>
