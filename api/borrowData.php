<?php
    header("Content-type:text/html;charset=utf-8");
    // 链接数据库
    require_once("conn.php");
    // 获取前台传来的当前用户的id
    session_start();
    $userid=$_SESSION["userid"];
    // 构造sql语句
    $sql="select* from borrowinfo where userid=$userid";
    // 执行sql查询语句
    $resql=mysqli_query($link,$sql);


    $data=[
        ["value"=> 0,"name"=>'房易贷'],
        ["value"=> 0,"name"=> '车易贷'],
        ["value"=> 0,"name"=> '信用贷']
    ];

    // 遍历获取结果集
    while ($rs=mysqli_fetch_assoc($resql)) {
        if($rs["borrowType"]=="t1"){
            $data[2]["value"]+=$rs["borrowAmount"];
         }
         else if($rs["borrowType"]=="t2"){
           $data[1]["value"]+=$rs["borrowAmount"];
         }
         else if($rs["borrowType"]=="t3"){
           $data[0]["value"]+=$rs["borrowAmount"];
         }
    }

    //返回的结果
    $result=[
        "title"=>['房易贷','车易贷','信用贷'],
        "data"=>$data
    ];

    echo json_encode($result);

?>