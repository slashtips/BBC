<?PHP
ob_start();

// $db_server = "localhost";
// $db_name = "zfcloudadmin_kaiBBC";
// $db_user = "zfcloudadmin_root";
// $db_passwd = "m4h5KHgKFUx4";



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