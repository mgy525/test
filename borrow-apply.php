<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>个人中心-p2p金融借贷平台</title>
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


			<div class="el-tip-info">
				<h3>信用借款</h3>
				<p>
					<span class="text-info">授信额度：</span><span class="text-danger">2000 </span>    
					<span class="text-info">可借金额：</span><span class="text-danger">2000</span>
				</p>
			</div>

			<div class="page-header lead">
				借款信息
				<label class="label label-primary">信用标</label>
			</div>
			<form id="borrowfrom" class="form-horizontal el-borrow-form" novalidate="novalidate" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款类型
					</label>
					<div class="col-sm-3  input-group">
						<select class="form-control" name="borrowType" id="borrowType">
							<option value="t1">信用贷</option>
							<option value="t2">车易贷</option>
							<option value="t3">房易贷</option>
						</select>
					</div>
				</div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款金额
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="borrowAmount">
						<span class="input-group-addon">元</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款利息
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="currentRate">
						<span class="input-group-addon">%</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款期限
					</label>
					<div class="col-sm-3 input-group">
						<select class="form-control" name="monthes2Return">
							<option value="1">1</option>
							<option value="3">3</option>
							<option value="6">6</option>
							<option value="9">9</option>
							<option value="12">12</option>
							<option value="24">24</option>
						</select>
						<span class="input-group-addon">月</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						还款方式
					</label>
					<label class="radio-inline">
						<input type="radio" value="0" checked="checked" name="repayment">
						按月分期
					</label>
					<label class="radio-inline">
						<input type="radio" value="1" name="repayment">
						按月到期
					</label>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						最小投标
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="minAmount">
						<span class="input-group-addon">元</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						最大投标
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="maxAmount">
						<span class="input-group-addon">元</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">
						投标奖金
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="rewardAmount" value="0">
						<span class="input-group-addon">%</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">
						招标天数
					</label>
					<div class="col-sm-3 input-group">
						<select class="form-control" name="disableDays">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<span class="input-group-addon">天</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款标题
					</label>
					<div class="col-sm-6 input-group">
						<input name="borrowTitle" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款描述
					</label>
					<div class="col-sm-6  input-group">
						<textarea name="description" rows="4" class="form-control" style="resize: none;"></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<button class="btn btn-primary col-lg-offset-3" id="submit" type="button" data-loading-text="提交">
						提交申请
					</button>
				</div>
			</form>
		

      
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

  <!-- 引入借款的交互逻辑 -->
  <script src="./dist/js/borrow.min.js"></script>

</body>

</html>