// 获取当前借款的类型
    var reqUrl=location.href;
    var borrowType=reqUrl.split("=")[1];
    $("#borrowType").val(borrowType);

// 处理前端借款的逻辑
$('#submit').on('click',function() {
    // 获取表单原数的所有值
    //alert("11")
    var fromData=$('#borrowfrom').serialize();
    // console.log(fromData);
    // 发送ajax请求
    $.post('./api/borrowAdd.php',fromData,function (result) {
        if (result.isSuccess) {
            alert(result.msg);
            location.href="borrow-list.php";
            
        }
        else{
            alert(result.msg)
        }
    },"json")
    

})

