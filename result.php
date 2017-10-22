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
print $_POST['sleepTime'];
$_SESSION['userData']['sleepTime'] = $_POST['sleepTime'];
?>
<!-- デバッグ用 -->
<?php
echo "{$_SESSION['userData']['age']}";
echo "{$_SESSION['userData']['profession']}";
echo "{$_SESSION['userData']['overtime']}";
echo "{$_SESSION['userData']['commuteTime']}";
echo "{$_SESSION['userData']['sleepTime']}";
?>
</body>
</html>
