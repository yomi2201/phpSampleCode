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
<h2>いらないデータを削除する、削除機能</h2>
<?php
if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $statement = $db->prepare('DELETE FROM memos WHERE id=?');
    $statement->execute(array($id));
}
?>
<pre>
<p>メモを削除しました</p>
</pre>
<p><a href="index.php">戻る</a></p>
</main>
</body>
</html>
