<?php
//Connect to the Database
require("config.php");
//query to create the Table
mysql_query("CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `signup_date` int(10) NOT NULL
)")
 or die(mysql_error());  

echo "Table Created!";

?>