<?PHP
// 连接数据库
require_once('conn.php');

// 开启session
session_start();
// 获取用户的id
$userid=$_SESSION["userid"];
// 根据用户id来查询数据
$sql="select * from borrowinfo where userid=$userid";
// 执行sql语句
$result=mysqli_query($link,$sql);

// 循环查询出来每一条数据
$borrowData=[];
   while($rs=mysqli_fetch_assoc($result)) {
    //    把每一条数据添加到数组中去
      array_push($borrowData,$rs);
   }

   // 把结果集转换为json发给前端
   echo json_encode($borrowData);
?>