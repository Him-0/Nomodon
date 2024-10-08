<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="css/sign-up-input.css">
</head>

<body>
    <a class="back-link"href="login.php">戻る</a>
    <h2>新規会員登録</h2>
    <form action="Sign-up-output.php" method="post">
        <div class="form-group">
            <label for="mail_address">メールアドレス：</label>
            <input type="email" name="mail_address" id="mail_address" required>
        </div>
        <div class="form-group">
            <label for="type">分類：</label>
            <select name="type" id="type">
                <option value="0">学生</option>
                <option value="1">教師</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">名前：</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="password">パスワード：</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">パスワード(確認用)：</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>
        <input type="submit" value="登録">
    </form>
</body>

</html>




