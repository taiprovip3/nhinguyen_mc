<?php
	$apikey = '73E5F54132F3894A89B8F2037A873F9F'; //API key, lấy từ website thesieutoc.net thay vào trong cặp dấu ''
	// database Mysql config
	$local_db = "localhost";
	$user_db = "zflomvqr_nhinguyenv3";
	$pass_db = "087663az";
	$name_db = "zflomvqr_nhinguyenv3";
	# đừng đụng vào 
  $conn = new mysqli($local_db, $user_db, $pass_db, $name_db);
  $conn->set_charset("utf8");
    
?>
