<?php
   define('DB_SERVER', 'sql300.epizy.com');
   define('DB_USERNAME', 'epiz_27671186');
   define('DB_PASSWORD', 'Adeelkawaii29');
   define('DB_NAME', 'epiz_27671186_sdi');

   /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
