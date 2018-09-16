
$(function () {
    // --------------------------注册表单验证--------------------------------
    //对哪个表单做验证
    $('#regForm')
        .bootstrapValidator({
            message: 'This value is not valid', //全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //验证成功的图标
                invalid: 'glyphicon glyphicon-remove', //验证失败的图标
                validating: 'glyphicon glyphicon-refresh' //异步验证ajax
            },
            //对那些字段做验证，注意使用name属性
            fields: {
                //对用户名做验证
                username: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 12, //最大
                            message: '用户名长度必须在6~12位之间'
                        }
                    }
                },
                // 密码验证
                password: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                    }
                },
                // 确认密码验证
                repeatPassword: {
                    message: '确认密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '确认密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '确认密码长度必须在6~18位之间'
                        },
                        //密码相同性的验证
                        identical: {
                            field: 'password', //对哪个字段做比较
                            message: '两次输入的密码不一致'
                        }
                    }
                },
                // 邮箱验证
                email: {
                    message: '电子邮件验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '电子邮件必须填写'
                        },
                        //电子邮件的规则
                        emailAddress: {
                            message: '电子邮件格式不正确'
                        }
                    }
                },
                // 电话验证
                phoneNum: {
                    message: '手机号码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '手机号码必须填写'
                        },
                        //手机号码正则表达式验证
                        regexp: {
                            regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                            message: '手机号码格式不正确'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function (e) {
            // 阻止浏览器默认行为
            e.preventDefault();

            // 获取表单实例
            var $form = $(e.target);

            // 获取验证实例
            var bv = $form.data('bootstrapValidator');

            // 使用ajax提交表单数据
            // $.post($form.attr('action'), $form.serialize(), function(result) {
            //     console.log(result);
            // }, 'json');
            const reqUrl = './api/userAdd.php';   //请求地址
            const data = $form.serialize()        //表单数据

            // console.log(data);

            $.post(reqUrl, data, function (result) {
                console.log('api返回的数据', result);
                // 根据后端的结果出来前端的业务逻辑
                if (result.isSuccess) {
                    alert(result.msg);
                    location.href = './login.php';
                } else {
                    alert(result.msg)
                }
            }, 'json')

        });

    // --------------------------登录表单验证--------------------------------
    $('#LoginForm')
        .bootstrapValidator({
            message: 'This value is not valid', //全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //验证成功的图标
                invalid: 'glyphicon glyphicon-remove', //验证失败的图标
                validating: 'glyphicon glyphicon-refresh' //异步验证ajax
            },
            //对那些字段做验证，注意使用name属性
            fields: {
                //对用户名做验证
                username: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 12, //最大
                            message: '用户名长度必须在6~12位之间'
                        }
                    }
                },
                // 密码验证
                password: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function (e) {
            // 阻止浏览器默认行为
            e.preventDefault();

            // 获取表单实例
            var $form = $(e.target);

            // 获取验证实例
            var bv = $form.data('bootstrapValidator');

            // 使用ajax提交表单数据
            // $.post($form.attr('action'), $form.serialize(), function(result) {
            //     console.log(result);
            // }, 'json');
            const reqUrl = './api/userlogin.php';   //请求地址
            const data = $form.serialize();        //表单数据

            // console.log(data);
            $.post(reqUrl, data, function (rs) {
                console.log('api返回的数据', rs);
                // 根据后端的结果出来前端的业务逻辑
                if (rs.isSuccess) {
                    $("#showModalTitle").text("登录成功")
                    //2. 设置蒙层的内容
                    $("#showModalContent").html(`<span class='glyphicon glyphicon-ok'></span> ${rs.msg}，等待<span id
                ='num'>6</span>秒后跳转到个人中心`);
                    //定时器修改等待的数字
                    let num = 6;
                    var timesID = setInterval(() => {
                        num--;
                        $("#num").text(num);
                        if (num == 0) {
                            clearInterval(timesID);
                            location.href = "./personal.php";//跳转到登录页面
                        }
                    }, 1000);
                } else {
                    //1. 设置蒙层的标题
                    $("#showModalTitle").text("登录失败")
                    //2. 设置蒙层的内容
                    $("#showModalContent").html("<span class='glyphicon glyphicon-remove'></span> " + rs.msg);
                }
                //3. 显示蒙层
                $('#showModal').modal('show');
            }, 'json')
        });
});