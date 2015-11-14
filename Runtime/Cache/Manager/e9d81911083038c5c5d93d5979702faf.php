<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo C('COMM_TITLE');?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/Public/assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/Public/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/Public/assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/Public/assets/css/main.css">
    <!-- Fonts -->
    
    <!-- Feature detection -->
    <script src="/Public/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Public/assets/js/html5shiv.js"></script>
    <script src="/Public/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="login-container">

        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            登录
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>登录访问您的帐户.</p>
                        <form class="form-horizontal" role="form" method="post" action="<?php echo U('Login/relogin');?>" onsubmit="return checkform()">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="用户名" onblur="return checkName() ">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="密码">
                                    <i class="fa fa-lock"></i>
                                    
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control"  style="width:150px;" name="verify" id="verifys" placeholder="验证码">
                                    <i class="fa fa-picture-o"></i>
                                    <img style="width:120px;float:right;cursor: pointer;margin-top: -38px" src="<?php echo U('Login/verify');?>" id="verify"  /> 
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">登录</button>
                                    <hr />
                                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Global JS-->
    <script src="/Public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/Public/assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="/Public/assets/js/application.js"></script>
    <script charset="utf-8" src="/Public/assets/layer/layer.js"></script>
</body>

</html>
<script type="text/javascript">
     function checkform(){
            var name=$("#username").val();
            var pass=$("#password").val();
            var verify=$("#verifys").val();
            if(name==''){
                layer.msg('用户名不能为空', {
                    icon: 5,
                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                }); 
                
                return false;
            }else if(pass==''){
                layer.msg('密码不能为空', {
                    icon: 5,
                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                });  
                
                
                return false;
            }else if(verify==''){
                layer.msg('验证码不能为空', {
                    icon: 5,
                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                });  
                
                return false;
            }else{
                return true;
            }
         }
        
          function checkName(){
            var name=$("#username").val();
            var url="<?php echo U('Login/checkName');?>";
              $.ajax({
                    type:'POST',
                    url:url,
                    data:{name:name},
                    success:function(data){
                        if(data==0){
                            layer.msg('用户名不存在', {
                                icon: 5,
                                time: 2000 //2秒关闭（如果不配置，默认是3秒）
                            });   
                
                            return false;
                        }else if(data==2){
                            layer.msg('用户名已被锁定', {
                                icon: 5,
                                time: 2000 //2秒关闭（如果不配置，默认是3秒）
                            });
                            
                            //layer.alert('用户名已被锁定', {icon: 5});
                            return false;
                        }else{
                            return true;
                        }
                }
                    
              })
         }
      $(function(){
            $("#verify").click(function(){
                 var src="<?php echo U('Login/verify','','');?>";
                 var urlSrc=src+'/id/'+Math.random();
                 $(this).attr('src', urlSrc);

            });
         });
</script>