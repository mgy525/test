<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款项目-p2p金融借贷平台</title>
    <!-- 引入核心文件 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入自己的文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/borrow-apply.min.css">
    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 验证用户身份是否合法 -->
    <script src="./dist/js/userStateCheck.min.js"></script>



</head>

<body>

    <?php 
        require_once('header.php');
    ?>
    <div class="container mycontent">
        <div class="row">
            <!-- 左侧导航栏 -->
            <?php
        require_once('personal-template-left.php')
      ?>
            <!-- 右侧内容 -->
            <div class="col-sm-9 col-xs-12" id="reightcontent">
                <button type="button" class="btn btn-primary btn-sm" id="btnOnOff">显示</button>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        借款项目
                    </div>
                    <c:foreach var="data" items="${pageResult.datas}">
                    </c:foreach>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>标题</th>
                                <th>时间</th>
                                <th>借款金额(元) </th>
                                <th>期限 </th>
                                <th>利率 </th>
                                <th>状态</th>
                            </tr>
                        </thead>
                        <tbody id="myData">
                            

                        </tbody>
                    </table>
                    <div style="text-align: center;">
                        <ul id="pagination" class="pagination"></ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php
        require_once('footer.php');
    ?>

    
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    
    <!-- 引入jqueryTemplate模板引擎的库文件 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 引入交互效果 -->
    <script src="./dist/js/personal.min.js"></script>
    <!-- 定义模板 -->
    <script type="text/html" id="mymode">
        <tr>
            <td>${borrowTitle}</td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}</td>
            <td>${monthes2Return}</td>
            <td>${currentRate}%</td>
            <td>
                <label class="text-muted">待发布</label>
            </td>
        </tr>
    </script>
<!-- 引入jqueryTemplate模板引擎的库文件 --> 
<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>


    <!-- 借款信息逻辑 -->
    <script src="./dist/js/borrow.min.js"></script>
    <!-- 页面渲染 -->
    <script src="./dist/js/borrow-list.min.js"></script>
    
</body>

</html>