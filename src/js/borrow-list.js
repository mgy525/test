
//借款页面加载时自动发起ajax请求到后台的api获取当前登录用户的借款信息
$.get("./api/borrowList.php",function (result) {
   
    var htmlStr=$("#mymode").tmpl(result);
    //渲染到页面
    $("#myData").html(htmlStr);
},"json");
