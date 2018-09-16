<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p注册页面</title>

    <!-- 引入核心文件 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入自己的文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/loginreg.min.css">

</head>

<body>
    <?php
        require_once('headerLoginNav.php')
    ?>

    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav">
                <li class="long-reg">
                    <p>用户登录/注册</p>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">用户注册</div>
            <div class="panel-body">
                <form id="regForm" class="form-horizontal" method="post">
                    <p>请填写注册信息，点击“提交注册”即可完成注册！</p>
                    <!-- 用户名 -->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <!-- 密码 -->
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                    <!-- 确认密码 -->
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">确认密码</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="repeatPassword" placeholder="请确认密码">
                        </div>
                    </div>
                    <!-- 手机 -->
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">手机</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phoneNum" placeholder="请输入手机号码">
                        </div>
                    </div>
                    <!-- 邮箱 -->
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">邮箱</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" placeholder="请输入邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">立即注册</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        require_once('footer.php')
    ?>



    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入bootstrapValidator文件库 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入自定义效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 引入表单验证 -->
    <script src="./dist/js/regLogin.min.js"></script>
</body>

</html>