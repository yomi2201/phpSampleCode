<?php require('dbconnect.php'); ?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>データの一覧画面を作る</h2>
<?php
$memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
?>
<article>
<?php foreach ($memos as $memo): ?>
<p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 50)); ?><?php print((mb_strlen($memo['memo'])) > 50 ? '...' : ''); ?></a></p>
<time><?php print($memo['created_at']); ?></time>
<hr>
<?php endforeach; ?>
</article>
</main>
</body>
</html>
