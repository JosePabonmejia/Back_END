<?php 
 $is_float = filter_var("1.2",FILTER_VALIDATE_FLOAT);
 $is_int = filter_var("12",FILTER_VALIDATE_INT);
 $is_email = filter_var("jose@gmail.com", FILTER_VALIDATE_EMAIL);
 $is_url= filter_var("google.com",FILTER_VALIDATE_URL);
 var_dump($is_float);
 var_dump($is_int);
 var_dump($is_email);
 var_dump($is_url);
 

?>