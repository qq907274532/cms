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
    <!-- Vector Map  -->
   
    <!-- ToDos  -->
   
    <!-- Fonts -->
     <link rel="stylesheet" href="/Public/assets/plugins/icheck/css/_all.css">
    <!-- Feature detection -->
    <script src="/Public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/assets/js/modernizr-2.6.2.min.js"></script>
    <script src="/Public/assets/layer/layer.js" type="text/javascript"></script>
    <link href="/Public/assets/css/validator.css" rel="stylesheet" type="text/css" />
    <script src="/Public/assets/js/formValidatorRegex.js" type="text/javascript"></script>
    <script src="/Public/assets/js/formValidator-4.0.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="/Public/assets/css/jquery.datetimepicker.css" />
      <script src="/Public/assets/js/jquery.datetimepicker.js"></script> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Public/assets/js/html5shiv.js"></script>
    <script src="/Public/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span><?php echo C('COMM_TITLE');?></span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>
                    <li class="dropdown messages">
                        <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                        </button>
                        <ul class="dropdown-menu alert animated fadeInDown">
                            <li>
                                <h1>You have
                                    <strong>5</strong>new messages</h1>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/Public/assets/img/avatar.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">James Bagian</span>
                                        <span class="time">30 mins</span>
                                        <div class="message-content">Lorem ipsum dolor sit amet, elit rutrum felis sed erat augue fusce...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/Public/assets/img/avatar1.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Jeffrey Ashby</span>
                                        <span class="time">2 hour</span>
                                        <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/Public/assets/img/avatar2.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">John Douey</span>
                                        <span class="time">3 hours</span>
                                        <div class="message-content">Penatibus suspendisse sit pellentesque eu accumsan condimentum nec...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/Public/assets/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ellen Baker</span>
                                        <span class="time">7 hours</span>
                                        <div class="message-content">Sem dapibus in, orci bibendum faucibus tellus, justo arcu...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/Public/assets/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ivan Bella</span>
                                        <span class="time">6 hours</span>
                                        <div class="message-content">Curabitur metus faucibus sapien elit, ante molestie sapien...</div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Check all messages <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </li>
                    <li class="profile-photo">
                        <img src="/Public/assets/img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <?php echo (session('name')); ?> <i class="fa fa-angle-down"></i>
                    </a>
                        <ul class="dropdown-menu animated fadeInDown" style="width:30px;">
                            <li style="width:30px;">
                                <a href="#"><i class="fa fa-user"></i> 修改信息</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo U('Login/logout');?>"><i class="fa fa-power-off"></i> 退出系统</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="toggle-navigation toggle-right">
                            <button type="button" class="btn btn-default" >
                                <i class="fa fa-comment"></i>
                            </button>
                        </div>
                    </li>

                </ul>
            </div>
        </header>
        <!--sidebar left start-->
     <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                  <ul class="nano-content">
                    <li class="active">
                        <a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i><span>首页</span></a>
                    </li>
                    <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li  <?php if($vo["id"] == $openFirstId): ?>class="sub-menu  active"<?php else: ?>class="sub-menu"<?php endif; ?>>
                        <a href="javascript:void(0);"><i class="fa <?php echo ($vo["icon"]); ?>"></i><span><?php echo ($vo["title"]); ?></span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                          <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($v["id"] == $open): ?>class="active"<?php endif; ?> ><a href="<?php echo ($v["urls"]); ?>"><?php echo ($v["title"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>  
                        </ul>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                  
                   
                   
                </ul>

               <!--  <ul class="nano-content">
                    <li <?php if( CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?> >
                        <a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i><span>首页</span></a>
                    </li>
                    <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($open == $vo['id']): ?>class="sub-menu active" <?php else: ?> class="sub-menu "<?php endif; ?> >
                            <a href="javascript:void(0);"><i class="fa fa-<?php echo ($vo["icon"]); ?>"></i><span><?php echo ($vo["title"]); ?></span><i class="arrow fa fa-angle-right pull-right"></i></a>
                            <ul>
                                
                             <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($v['name'] == CONTROLLER_NAME): ?>class="active"<?php endif; ?>><a href="<?php echo ($v["url"]); ?>"> <?php echo ($v["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>  
                            </ul>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                   
                 
                   
                 
                </ul> -->
            </div>

        </aside>  
    <style type="text/css">
        
        .onShow{
            height:30px;display:block;float:right;margin-right:302px;width:140px
        }
        .onError{
            height:30px;display:block;float:right;margin-right:302px;width:140px
        }
        .onFocus{
            height:30px;display:block;float:right;margin-right:302px;width:140px
        }
        .onCorrect{
            height:30px;display:block;float:right;margin-right:302px;width:140px
        }

    </style>    
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="<?php echo U('Index/index');?>">首页</a>
                            </li>
                            <li>管理员管理</li>
                            <li class="active">添加管理员</li>
                             <li class="pull-right"><a  href="<?php echo U('Admin/index');?>" class="btn btn-info">返回列表</a></li>
                        </ul>
                        <!--breadcrumbs end -->
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">添加管理员</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal form-border"  method="post" action="" onsubmit="return check()">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">管理员名称：</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="管理员名称" value="">
                                        </div>
                                             <span class='onShow'  id="usernameTip"></span>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">管理员密码：</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="password" id="password"  placeholder="管理员密码" value="">
                                        </div>
                                        <span class='onShow'  id="passwordTip"></span>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">重复密码：</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="repass" id="repass"  placeholder="重复密码" value="">
                                        </div>
                                        <span class='onShow'  id="repassTip"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">权限组：</label>
                                        <div class="col-sm-4">
                                       
                                             <select class="form-control" name="group_id" id="role">
                                                <option value="0">请选择权限</option>
                                                 <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                        <span class='onShow'  id="roleTip"></span>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">排序：</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="sort"  value="50" placeholder="50">
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">状态：</label>
                                        <div class="col-sm-6">
                                            <label class="radio-inline">
                                                <div class="iradio_flat-grey " style="position: relative;"><input class="icheck" type="radio"  name="lock"  value="开启"></div>&nbsp;开启
                                                </label>
                                            <label class="radio-inline">
                                                <div class="iradio_flat-grey" style="position: relative;"><input class="icheck" type="radio" name="lock" value="关闭"></div>&nbsp;关闭</label>
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-8 col-sm-10">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </section>
        <!--main content end-->
        <!--sidebar right start-->
      
        <!--sidebar right end-->
    </section>
    
    <script src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/Public/assets/js/application.js"></script>
    <!--Page Level JS-->
    <script src="/Public/assets/plugins/icheck/js/icheck.min.js"></script>
  
  <script type="text/javascript">
$(function(){
    $.formValidator.initConfig({formID:"myform",debug:false,submitOnce:true
        
    });
    $("#username").formValidator({onShow:"请输入用户名",onFocus:"用户名4-10个字符",onCorrect:"该用户名可以注册"}).inputValidator({min:4,max:10,onError:"你输入的用户名非法"})
        .ajaxValidator({
        async : false,
        url :"<?php echo U('Login/check_user');?>",
        success : function(data){

            if(data==0){
                return true;
            }else if(data==1){
                return false;
            }
            else{
                return false;
            }
        },
        buttons: $("#button"),
        error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
        onError : "用户名已存在",
        onWait : "正在对用户名进行合法性校验，请稍候..."
    }).defaultPassed();
    $("#password").formValidator({onShow:"填写密码",onFocus:"填写6位以上密码",onCorrect:"密码已经输入"}).inputValidator({min:6,onError:"填写6位以上密码"}).defaultPassed();
    
    $("#repass").formValidator({onShow:"再次输入密码",onFocus:"至少6个长度",onCorrect:"密码一致"}).inputValidator({min:1,empty:{leftEmpty:false,rightEmpty:false},onError:"重复密码不能为空"}).compareValidator({desID:"password",operateor:"=",onError:"2次密码不一致"});
    $("#role").formValidator({onShow:"选择权限组",onFocus:"选择权限组",onCorrect:"权限组已选择"}).inputValidator({min:1,onError:"选择权限组"}).defaultPassed();
    
  $('input').iCheck({
            checkboxClass: 'icheckbox_flat-grey',
            radioClass: 'iradio_flat-grey'
        }); 
   
});
</script>

</body>

</html>