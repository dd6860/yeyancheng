<?php
// 作用，分页



    include 'DBHelper.php';
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS'); 
    header('Access-Control-Request-Headers:accept, content-type');
    $page = isset($_GET["page"]) ? $_GET["page"] : '30';
    $limit = isset($_GET["limit"]) ? $_GET["limit"] : '30';
    $order = isset($_GET["order"]) ? $_GET["order"] : '';
    $sql = 'select SQL_CALC_FOUND_ROWS * from goodslistput';
    if($order){
        $sql .= ' order by ';
        $sql .= $order;
    }
    $sql .= ' limit ';
    $sql .= $page - 1; 
    $sql .= ', ';
    $sql .= $limit;

    $sql .= ';select FOUND_ROWS() as rowsCount;';

    $result = multi_query_oop($sql);
    
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>