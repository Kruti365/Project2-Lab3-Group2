<?php



define('DBCONNECTION', 'mysql:host=localhost;dbname=art');
define('DBUSER', 'root');
define('DBPASS', '');


spl_autoload_register(function ($class) {
    $file = 'lib/' . $class . '.class.php';
    if (file_exists($file)) 
      include $file;
});

/* cloud 9 DB connection 
$ip = getenv('IP');
$port = '3306';
$user = getenv('C9_USER');
$connection = "mysql:host=$ip;port=$port;dbname=art;charset=utf8mb4;";
$pdo = DatabaseHelper::setConnectionInfo(array(DBCONNECTION, $user, ''));*/

/* localhost connection */
$pdo = DatabaseHelper::setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));

// Starting session
session_start();
?>
