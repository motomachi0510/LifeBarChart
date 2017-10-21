<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>test2</title>
</head>
<body>
<?php
print'おはよう';
print$_POST['age'];

$dsn = 'mysql:dbname=testdb;host=localhost';
$user = 'root';
$password = '';

try{
    $dbh = new PDO($dsn, $user, $password);

    $sql = 'select * from testtable';
    foreach ($dbh->query($sql) as $row) {
        print($row['age'].',');
        print($row['gakureki']);
        print('<br />');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>
</body>
</html>