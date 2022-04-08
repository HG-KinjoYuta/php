<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>作成</title>
</head>
<body>
    <h1>新規作成</h1>
    <form method="POST" action="./create.php">
        <textarea name="content" required></textarea>
        <br>
        <input type="submit" value="登録">
    </form>
    <a href="./index.php">一覧へ</a>
</body>
</html>