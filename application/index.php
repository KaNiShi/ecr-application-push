<?php
$pdo = new PDO('sqlite:data.sqlite');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$statement = $pdo->prepare('SELECT * FROM `articles`;');
$statement->execute();
$articles = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <header>
    <h1>ヘッダー</h1>
    </header>
<?php foreach ($articles as $article) : ?>
    <div>
        <h2><?= htmlspecialchars($article['title']) ?></h2>
        <p><?= nl2br(htmlspecialchars($article['body'])) ?></p>
    </div>
    <hr>
<?php endforeach; ?>
    <footer style="text-align: right;">ふったー</footer>
</body>
</html>
