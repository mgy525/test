<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我要借款-p2p金融借贷平台</title>
    <!-- 引入核心文件 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入自己的文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
</head>
<body>

    <?php 
        require_once('header.php');
    ?>
    
    <div class="container el-borrow">
		<div class="row">
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title" style="background-color: #40d47e;">
					信用贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
                        <ul>
                            <li>填写基本资料</li>
                            <li>身份认证</li>
                            <li>视频认证</li>
                        </ul>
					<a href="borrow-apply.php?id=t1" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title">车易贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow-apply.php?id=t2" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title" style="background-color: #2ca2ee;">
					房易贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 12,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow-apply.php?id=t3" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
		</div>
	</div>





    <?php
        require_once('footer.php');
    ?>
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义效果 -->
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>