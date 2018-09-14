<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p登录页面</title>

    <!-- 引入核心文件 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入自己的文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/loginreg.min.css">

</head>

<body>
    <?php
        require_once('headerLoginNav.php')
    ?>

    <!-- 主导航栏 -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="">
                </a>
                <span class="long-reg">
                    用户登录/注册
                </span>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">用户登录</div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <p>请输入用户名和密码</p>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">立即登录</button>
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
    <!-- 引入自定义效果 -->
    <script src="./dist/js/p2p.min.js"></script>
</body>

</html>