<?php 
// 作用，随机数

   include 'DBHelper.php';
   header('Access-Control-Allow-Origin:*');
   header('Access-Control-Allow-Methods:POST,GET,OPTIONS'); 
   header('Access-Control-Request-Headers:accept, content-type');
   
   $sql = "select * from randomcode";
   $result = query_oop($sql);
   
   echo json_encode($result, JSON_UNESCAPED_UNICODE);
 
?>