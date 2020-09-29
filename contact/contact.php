<?php
session_start();
//変数代入または初期化
$name = isset( $_SESSION[ 'company' ] ) ;
//エラーを初期化
$error_name = isset( $error['company'] ) ? $error['company'] : NULL;
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お問い合わせページ</title>
<link href="../style.css" rel="stylesheet">
</head>

<body>
<div class="container">
<form method="POST" action="confirm.php">
<table border="1">
<tr>
<td colspan="2" class="tb">会社名</td>
<td>
<p>
<input type="text" name="company" >
</p>
</td>
</tr>
<tr>
<td colspan="2">氏名</td>
<td>
<p>
姓<input type="text" name="family_name">
名<input type="text" name="first_name">
</p>
</td>
</tr>
<tr>
<td colspan="2">氏名(かな)</td>
<td>
<p>
ｾｲ<input type="text" name="family_kana">
ﾒｲ<input type="text" name="family_kana">
</p>
</td>
</tr>
<tr>
<td colspan="2">郵便番号</td>
<td>
<p>
<input type="text" name="postal_code1"> 
― 
<input type="text" name="postal_code2">
</p>
</td>
</tr>
<tr>
<td rowspan="3">住所</td>
<td>都道府県</td>
<td>
<select name="pref" size="1">
<option value="0">福岡県</option>
<option value="1">佐賀県</option>
<option value="2">長崎県</option>
<option value="3">大分県</option>
<option value="4">熊本県</option>
<option value="5">宮崎県</option>
<option value="6">鹿児島県</option>
<option value="7">沖縄県</option>
</select>
</td>
</tr>
<tr>
<td>市区町村</td>
<td>
<p>
<input type="text" name="city">
</p>
</td>
</tr>
<tr>
<td>番地･建物名など</td>
<td>
<p>
<input type="text" name="address">
</p>
</td>
</tr>
<tr>
<td colspan="2">電話番号</td>
<td>
<p>
<input type="text" name="tel1"> 
― 
<input type="text" name="tel2"> 
― 
<input type="text" name="tel3">
</p>
</td>
</tr>
<tr>
<td colspan="2">生年月日</td>
<td>
<p>
<select name="birth_era" size="1">
<option value="0">昭和</option>
<option value="1">平成</option>
</select>
<input type="text" name="birth_year">年
<input type="text" name="birth_month">月
<input type="text" name="birth_day">日
</p>
</td>
</tr>
<tr>
<td colspan="2">メールアドレス</td>
<td>
<p>
<input type="text" name="mailaddress">
</p>
</td>
</tr>
<tr>
<td colspan="2">ご連絡方法</td>
<td>
<input type="radio" name="method" value="0">電話
<input type="radio" name="method" value="1">メール
<input type="radio" name="method" value="2">どちらでもよい
</td>
</tr>
<tr>
<td colspan="2">このページをどうやって知りましたか?</td>
<td>
<input type="checkbox" name="question" value="0">Webで検索
<input type="checkbox" name="question" value="1">友人･知人に聞いた
<input type="checkbox" name="question" value="2">新聞広告
<input type="checkbox" name="question" value="3">その他
</td>
</tr>
<tr>
<td colspan="2">備考</td>
<td>
<p>
<input type="text" name="notes">
</p>
</td>
</tr>
</table>

<button type="submit" class="btn confmbtn">確認する</button>
</form>
</div>
</body>
</html>
