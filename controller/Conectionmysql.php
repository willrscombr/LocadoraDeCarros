
<?php
/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=locacaocarros;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    if ($dbh){
        echo "COneccao efetuada";
        }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
