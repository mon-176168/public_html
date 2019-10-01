<?php
// 実習２：配列の導入
$items = [];
$prices = [];

// 楽器の配列（インデックスで価格の配列とリンク）
$items = array(
	"アップライトピアノ" => 600000,
	"電子ピアノ" => 220000, 
	"ローズピアノ" => 280000,
	"エレキギター" => 80000,
	"アコースティックギター" => 200000,
	"エレキベース" => 120000,
	"アップライトベース" => 420000
);
// すべての配列の要素を表示
/*
foreach ($items as $name => $price) {
    print htmlspecialchars($name, ENT_QUOTES)." の価格は ".htmlspecialchars($price, ENT_QUOTES)." 円です。<br />";
}

exit(0); // 全要素の表示の確認のためにHTMLを表示しないように、ここで強制的に中断
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>楽器の価格表</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="../assets/css/ccmc-01.css"/>
</head>

<body>
	<header>
		<h1>検索キーワードにヒットする商品を探し出す</h1>
	</header>

	<main id="result">
		<table>
			<caption>検索結果</caption>
			<?php foreach ($items as $name => $price) { ?>
			<tr>
    			<td><?= htmlspecialchars($name, ENT_QUOTES) ?></td><td><?= htmlspecialchars(number_format($price), ENT_QUOTES) ?>円</td>
			</tr>
			<?php } ?>
		</table>
	</main>

	<footer>
		<p id="copyright">&copy; 2019 Chuo Computer &amp; Comunication Callege</p>
	</footer>
</body>
</html>
