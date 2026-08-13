<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>申請内容確認</title>
    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>申請内容の確認</h1>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $question = $_POST["question"];
        $gender = $_POST["gender"];

        //バリテーション
        if(!preg_match("/^[ぁ-んァ-ヶー一-龠々a-zA-Z]+$/u", $name)){
            echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";

        } elseif (!is_numeric($age) || $age < 1 || $age > 30){
            echo "<p>年齢は0から150の間で入力してください。</p>";

        } elseif (!preg_match("/^[0-9-]+$/" , $phone)) {
            echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";

        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>メールアドレスの形式が正しくありません。</p>";
            
        } elseif (!preg_match("/^[ぁ-んァ-ヶー一-龠々a-zA-Z0-9-]+$/u" , $address)){
            echo "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";

        } else {
            //入力内容の表示
            echo "<p>名前: " . htmlspecialchars($name,ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>年齢: {$age}歳</p>";
            echo "<p>携帯電話: {$phone}</p>";
            echo "<p>メールアドレス: " . htmlspecialchars($email,ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>住所: " . htmlspecialchars($address,ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>質問: " . htmlspecialchars($question,ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>性別: {$gender}</p>";
        }
    } else {
            echo "<p>データが送信されていません。</p>";
        }
        ?>
        </body>
        </html>
