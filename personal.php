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
  <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
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
      <div class="col-sm-3 col-xs-12">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

          <!-- 借款项目 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  投资项目
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <p>
                  <a href="#"></a>
                </p>
              </div>
            </div>
          </div>
          <!-- 借款项目 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  借款项目
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <p>
                  <a href="#">借款项目</a>
                </p>
                <p>
                  <a href="#">还款明细</a>
                </p>
              </div>
            </div>
          </div>
          <!-- 我的账户 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  我的账户
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">



              </div>
            </div>
          </div>
          <!-- 账户信息 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                  aria-controls="collapseFour">
                  账户信息
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <p>
                  <a href="#">实名认证</a>
                </p>
                <p>
                  <a href="#">银行卡管理</a>
                </p>
                <p>
                  <a href="#">登记记录</a>
                </p>
              </div>
            </div>
          </div>
          <!-- 资产详情 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                  aria-controls="collapseFive">
                  资产详情
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                <p>
                  <a href="#">账户流水</a>
                </p>
                <p>
                  <a href="#">充值明细</a>
                </p>
                <p>
                  <a href="#">提现记录</a>
                </p>
                <p>
                  <a href="#">收款明细</a>
                </p>
              </div>
            </div>
          </div>
          <!-- 个人资料 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                  aria-controls="collapseSix">
                  个人资料
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
              <div class="panel-body">



              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 右侧内容 -->
      <div class="col-sm-9 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="el-account-info">
              <!-- <div class="row">
                <div class="col-sm-2 col-xs-12">
                  <div class="pull-left el-head-img">
                    <img class="icon" src="images/head_icon.jpg">
                  </div>
                </div>
                <div class="col-sm-10 col-xs-12 pull-left el-head">
                  <p>昵 称：源代码教育</p>
                  <p>用户名：小强</p>
                  <p>最后登录时间：2016-10-25 15:30:10</p>
                </div>
                <div class="clearfix"></div>
              </div> -->
              <div class="el-account-info">
                  <div class="pull-left el-head-img">
                    <img class="icon" src="images/head_icon.jpg">
                  </div>
                  <div class="pull-left el-head">
                    <p>昵 称：源代码教育</p>
                    <p>用户名：小强</p>
                    <p>最后登录时间：2016-10-25 15:30:10</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
            </div>


            <div class="row zj">
              <div class="col-md-4">
                <p>总金额：
                  <span>10000元</span>
                </p>
              </div>

              <div class="col-md-4">
                <p>可用金额：
                  <span>8000元</span>
                </p>
              </div>

              <div class="col-md-4">
                <p>冻结金额：
                  <span>2000元</span>
                </p>
              </div>

            </div>

            <div class="mybut">
              <a class="btn btn-primary btn-lg" href="recharge.html">账户充值</a>
              <a class="btn btn-danger btn-lg" href="moneyWithdraw_apply.html">账户提现</a>
            </div>

            <div class="el-account-info">
              <div class="row">
                <div class="col-sm-4">
                  <div class="el-accoun-auth">
                    <div class="el-accoun-auth-left">
                      <img src="images/shiming.png">
                    </div>
                    <div class="el-accoun-auth-right">
                      <h5>实名认证</h5>
                      <p>
                        <!--
														已认证
														<a href="realAuth.html">查看</a>
													-->
                        未认证
                        <a href="realAuth.html">马上认证</a>

                      </p>
                    </div>
                    <div class="clearfix"></div>
                    <p class="info">实名认证之后才能在平台投资</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="el-accoun-auth">
                    <div class="el-accoun-auth-left">
                      <img src="images/shouji.jpg">
                    </div>
                    <div class="el-accoun-auth-right">
                      <h5>手机认证</h5>
                      <p>
                        已认证
                        <a href="#">查看</a>
                      </p>
                    </div>
                    <div class="clearfix"></div>
                    <p class="info">可以收到系统操作信息,并增加使用安全性</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="el-accoun-auth">
                    <div class="el-accoun-auth-left">
                      <img src="images/youxiang.jpg">
                    </div>
                    <div class="el-accoun-auth-right">
                      <h5>邮箱认证</h5>
                      <p>
                        已认证
                        <a href="#">查看</a>
                      </p>
                    </div>
                    <div class="clearfix"></div>
                    <p class="info">您可以设置邮箱来接收重要信息</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="el-accoun-auth">
                    <div class="el-accoun-auth-left">
                      <img src="images/baozhan.jpg">
                    </div>
                    <div class="el-accoun-auth-right">
                      <h5>VIP会员</h5>
                      <p>
                        普通用户
                        <a href="#">查看</a>
                      </p>
                    </div>
                    <div class="clearfix"></div>
                    <p class="info">VIP会员，让你更快捷的投资</p>
                  </div>
                </div>
              </div>
            </div>

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
  <!-- 引入bootstrap核心库 -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- 引入自定义效果 -->
  <script src="./dist/js/p2p.min.js"></script>
</body>

</html>