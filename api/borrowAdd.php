<?php
// 获取前端传过来的数据
// 借款类型 borrowType
// 借款金额 borrowAmount   
// 借款利息 currentRate
// 借款期限 monthes2Return
// 还款方式 repayment
// 最小投标 minAmount
// 最大投标 maxAmount
// 投标奖金 rewardAmount
// 招标天数 disableDays
// 借款标题 borrowTitle
// 借款描述 description
// ------------------------------------------------------------
// 借款人编号 userid
$borrowType=$_POST["borrowType"];
$borrowAmount=$_POST["borrowAmount"];
$currentRate=$_POST["currentRate"];
$monthes2Return=$_POST["monthes2Return"];
$repayment=$_POST["repayment"];
$minAmount=$_POST["minAmount"];
$maxAmount=$_POST["maxAmount"];
$rewardAmount=$_POST["rewardAmount"];
$disableDays=$_POST["disableDays"];
$borrowTitle=$_POST["borrowTitle"];
$description=$_POST["description"];
session_start();
$userid=$_SESSION["userid"];
 // 构造sql语句
 $sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";

// 引入数据库的链接
require_once("conn.php");

// 执行sql语句
$result=mysqli_query($link,$sql);

// 判断是否执行成功
if ($result) {
    //成功
    $rsArray=["isSuccess"=>true,"msg"=>"借款信息提交成功!"];
    echo json_encode($rsArray);
}
else{
    //失败
    $rsArray=["isSuccess"=>false,"msg"=>"借款信息提交失败!"];
    echo json_encode($rsArray);
}

// 关闭数据库连接
require_once("./release.php");
?>