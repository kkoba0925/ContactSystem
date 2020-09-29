<?php
session_start();
$name = isset( $_POST[ 'company' ] ) ;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>確認画面</title>
<link href="../style.css" rel="stylesheet">
</head>

<body>
<div class="container">
<form method="POST" action="complete.php">
<table border="1">
<tr>
<td colspan="2" class="tb">会社名</td>
<td>
<p>
<?php echo $_POST["company"]; ?>
</p>
</td>
</tr>
<tr>
<td colspan="2">氏名</td>
<td>
<p>
名前
</p>
</td>
</tr>
<tr>
<td colspan="2">氏名(かな)</td>
<td>
<p>
なまえ
</p>
</td>
</tr>
<tr>
<td colspan="2">郵便番号</td>
<td>
<p>
000
― 
0000
</p>
</td>
</tr>
<tr>
<td rowspan="3">住所</td>
<td>都道府県</td>
<td>
<p> 
都道府県
</p>
</td>
</tr>
<tr>
<td>市区町村</td>
<td>
<p>
市区町村
</p>
</td>
</tr>
<tr>
<td>番地･建物名など</td>
<td>
<p>
番地建物部屋番号
</p>
</td>
</tr>
<tr>
<td colspan="2">電話番号</td>
<td>
<p>
000
― 
0000 
― 
0000
</p>
</td>
</tr>
<tr>
<td colspan="2">生年月日</td>
<td>
<p>
元号
何年
何月
何日
</p>
</td>
</tr>
<tr>
<td colspan="2">メールアドレス</td>
<td>
<p>
example@example.com
</p>
</td>
</tr>
<tr>
<td colspan="2">ご連絡方法</td>
<td>
どちらでもよい
</td>
</tr>
<tr>
<td colspan="2">このページをどうやって知りましたか?</td>
<td>
Webで検索
</td>
</tr>
<tr>
<td colspan="2">備考</td>
<td>
<p>
特になし
</p>
</td>
</tr>
</table>
<button type="submit" class="btn confmbtn">送信する</button>
</form>
<form action="contact.php" method="post">
<button type="submit" class="confmbtn">戻る</button>
</form>
</div>
</body>
</html>
