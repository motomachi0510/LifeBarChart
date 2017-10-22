<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="main.css">
<title>人生棒グラフ</title>
</head>
<body>
<?php
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');
print $_POST['age'];
$_SESSION['userData']['age'] = $_POST['age'];
?>
<!-- デバッグ用 -->
<?php
echo "{$_SESSION['userData']['age']}";
echo "{$_SESSION['userData']['profession']}";
echo "{$_SESSION['userData']['overtime']}";
echo "{$_SESSION['userData']['commuteTime']}";
echo "{$_SESSION['userData']['sleepTime']}";
?>
	<form method="post" action="overtime.php">
		<div class="question">Q2.あなたの職業を教えてください。</div>
		<div class="input">
			<input name="profession" type="text"> <br>
		</div>
		<div class="next_button">
			<input type="button" class="button" value="戻る" onClick="history.back()">
			<input type="submit" class="button" value="次へ">
		</div>
	</form>
</body>
</html>
