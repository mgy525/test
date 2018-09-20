<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我要投资-p2p金融借贷平台</title>
    <!-- 引入核心文件 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入插件样式 -->
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <!-- 引入自己的文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
</head>
<body>

    <?php 
        require_once('header.php');
    ?>
    <div class="container">
		<h4 class="page-title">投资列表</h4>
		
		<table class="table el-table table-hover">
			<thead id="gridHead">
				<tr>
					<th>借款人</th>
					<th width="180px">借款标题</th>
					<th>年利率</th>
					<th>金额</th>
					<th>还款方式</th>
					<th>进度</th>
					<th width="80px">操作</th>
				</tr>
			</thead>
			<tbody id="gridBody">
			
            </tbody>
        </table>
        <!-- 此处是分页插件 -->
		<div style="text-align: center;">
            <div id="cjbody" class="m-pagination"></div>
		</div>
	</div>

    <?php
        require_once('footer.php');
    ?>
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- 引入分页插件 -->
    <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.js"></script>

    <!-- jquery.tmpl -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入自定义效果 -->
    <script src="./dist/js/p2p.min.js"></script>

    <!-- 定义模板 -->
    <script id="moban" type="text/html">
        <tr>
            <td>G_G</td>
            <td>${borrowTitle}</td>
            <td class="text-info">${currentRate}%</td>
            <td class="text-info">${borrowAmount}</td>
            <td>${repayment}</td>
            <td>100.00%</td>
            <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
		</tr>
    </script>
    <!-- 渲染模板 -->
    <script src="./dist/js/invest.min.js"></script>
</body>
</html>