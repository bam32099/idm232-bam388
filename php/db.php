<?php
// Create a connection Server, username, password, name of database stored in variables 
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
  // Local database credentials
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "recipe";
}
else {
  // Remote database credentials
  $dbhost = "localhost";
  $dbuser = "bamurray_bam";
  $dbpass = "frank903347";
  $dbname = "bamurray_idmrecipe";
}

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
  );
}




// $db_server = 'localhost'; 

//  define('DB_SERVER', 'localhost');
//  define('DB_USER', 'root');
//  define('DB_PASS', '');
//  define('DB_NAME', 'recipe');

//  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

//  if (mysqli_connect_errno()) {
//      die('Database connection failed: ' . mysqli_connect_errno() . '' . mysqli_connect_errno());
//  }
//     else {

//     }

?>

