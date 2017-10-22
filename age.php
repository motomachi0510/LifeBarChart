<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="main.css">
<title>人生棒グラフ</title>
<script type="text/javascript">
<!--
function next(){
	var
}
-->
</script>
</head>
<body>
<?php
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');
// ユーザーデータの初期化
$_SESSION['userData'] = array(
    'age' => '0',
    'profession' => '0',
    'overtime' => '0',
    'commuteTime' => '0',
    'sleepTime' => '0'
);
?>
<!-- デバッグ用 -->
<?php
echo "{$_SESSION['userData']['age']}";
echo "{$_SESSION['userData']['profession']}";
echo "{$_SESSION['userData']['overtime']}";
echo "{$_SESSION['userData']['commuteTime']}";
echo "{$_SESSION['userData']['sleepTime']}";
?>

<form method="post" action="profession.php">
		<div class="question">Q1.まずはあなたの年齢を教えてください。</div>

		<div class="input">
			<input name="age" type="text" class=""> 歳 <br>
		</div>
		<div class="next_button">
			<input type="submit" class="button" value="戻る">
			<input type="submit" class="button" value="次へ">
		</div>
	</form>
</body>
</html>
