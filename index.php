<?php
/* Подключение к базе данных ODBC, используя вызов драйвера */
$dsn = 'mysql:dbname=aksyanov_test;host=mysql.aksyanov.myjino.ru;port=3306';
$user = '045527113_test';
$password = 'qwe123';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
    $sql = 'SELECT id, name FROM users';
    $users = $dbh->query($sql)->fetchAll();
    foreach($users as $row) {
        print $row['id'] . "\t";
        print $row['name'] . "\n";
}

?>

<html>
<form method="get"><input type="text" name="name"><input type="submit" title="Нажми меня"></form>
</html>
