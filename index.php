[16:08:12] Руслан: <?php
/* Подключение к базе данных ODBC, используя вызов драйвера */
$dsn = 'mysql:dbname=testdb;host=mysql.aksyanov.myjino.ru;port=3306';
$user = '045527113_test';
$password = 'qwe123';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

?>