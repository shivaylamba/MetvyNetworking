<!--?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'userinfogen';

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?-->



<?php
/* Machine Learning Dataset API Acess */
$db['db_host'] = 'localhost'; /* Hosted on IBM Watson Platform */
$db['db_user'] = 'shawrya';
$db['db_pass'] = 'metvy';
$db['db_name'] = 'metvy';

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>
