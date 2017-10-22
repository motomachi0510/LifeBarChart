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
print $_POST['profession'];
$_SESSION['userData']['profession'] = $_POST['profession'];
?>
<!-- デバッグ用 -->
<?php
echo "{$_SESSION['userData']['age']}";
echo "{$_SESSION['userData']['profession']}";
echo "{$_SESSION['userData']['overtime']}";
echo "{$_SESSION['userData']['commuteTime']}";
echo "{$_SESSION['userData']['sleepTime']}";
?>
	<form method="post" action="commuteTime.php">
		<div class="question">Q3.1日の平均残業時間を教えてください。</div>
		<div class="input">
			<input name="overtime" type="text"> 時間 <br>
		</div>
		<div class="next_button">
			<input type="button" class="button" value="戻る" onClick="history.back()">
			<input type="submit" class="button" value="次へ">
		</div>
	</form>
</body>
</html>
