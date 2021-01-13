<?php
   define('DB_SERVER', 'sql106.mipropia.com');
   define('DB_USERNAME', 'mipc_27672310');
   define('DB_PASSWORD', 'tesdicoba123');
   define('DB_NAME', 'mipc_27672310_coba');

   /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
