<?php
    $username=$_POST['username'];
    $password=md5($_POST['password']);


    // 连接数据库
    //$link=mysqli_connect("localhost","root","root","p2p",3306);
    require_once("./conn.php");

    // 构"造数据库语句
    $sql="select * from userInfo where username='".$username."' and pwd='".$password."'";
    
    // echo $sql;
    // 执行sql语句
    $result=mysqli_query($link,$sql);

    // 获取查询的结果集
    $rs=mysqli_fetch_assoc($result);

    // 根据结果判断是否执行成功
    if ($rs!=null) {
        // 登录成功就创建session对象
        session_start();
        $_SESSION["username"]=$rs["username"];
        $_SESSION["userid"]=$rs["userid"];

        $reArray=["isSuccess"=>true,"msg"=>"登录成功","username"=>$_SESSION["username"]];
        
        echo json_encode($reArray);
    } else {
        $reArray=["isSuccess"=>false,"msg"=>"登录失败"];
        echo json_encode($reArray);
    }
    // 释放内存资源
    mysqli_free_result($result);
    require_once("release.php");
?>