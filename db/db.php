<?PHP
ob_start();

$dbms = 'mysql';
$host = 'bbc-db-1.cftxt2nbwtqk.ap-northeast-1.rds.amazonaws.com';
$dbName = 'zfcloudadmin_kaiBBC';
$user = 'root';
$pass = 'zf888888';
$dsn = "$dbms:host=$host;dbname=$dbName";


try {
    $dbh = new PDO($dsn, $user, $pass);
    $dbh = null;
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}

$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));

?>