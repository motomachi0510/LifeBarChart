<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="main.css">
<title>人生棒グラフ</title>
<?php
print$_POST['age'];
?>
</head>
<body>
	<div class="question" >
		Q2.あなたの職業を教えてください。
	</div>

	<div class="input">
		<input name="profession" type="text" >  <br>
	</div>

	<div class="next_button">
		<form method="post" action="overtime.php">
			<input type="submit" class="button" value="次へ">
		</form>
	</div>
<!-- デバッグ用 -->
<?php
echo "{$_SESSION['userData']['age']}";
echo "{$_SESSION['userData']['profession']}";
echo "{$_SESSION['userData']['overtime']}";
echo "{$_SESSION['userData']['sleepTime']}";
?>
</body>
</html>