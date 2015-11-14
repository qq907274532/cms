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
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <!--tiles start-->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-red">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500">2222</h1>
                                <p>新会员</p>
                            </div>
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-turquoise">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="56" data-speed="2500">22222</h1>
                                <p>新的评论</p>
                            </div>
                            <div class="icon"><i class="fa fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-blue">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="32" data-speed="2500">222222</h1>
                                <p>新的信息</p>
                            </div>
                            <div class="icon"><i class="fa fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-purple">
                            <div class="content">
                                <h1 class="text-left timer" data-to="105" data-speed="2500">2222</h1>
                                <p>新的文章</p>
                            </div>
                            <div class="icon"><i class="fa fa-bar-chart-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">
                                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                                

                                                
                                                <tbody>
                                                    <tr>
                                                        
                                                         <td colspan="2" ><img src="/Public/assets/img/user.png">  <span style="color:#026b9c;font-size:15px;">欢迎登录<?php echo C('COMM_TITLE');?></span></td>
                                                        
                                                        
                                                    </tr>

                                                       <tr>
                                                          <td width="300"><span id="team"> 用户名</span></td>
                                                          <td > <?php echo (session('name')); ?></td>
                                                        </tr>
                                                     <tr>
                                                      <td > <span id="team">登录ip</span></td>
                                                      <td ><?php echo (session('ip')); ?></td>
                                                    </tr>
                                                      <tr>
                                                      <td colspan="2" ><img src="/Public/assets/img/base.png"> <span style="color:#026b9c;font-size:15px;">服务器信息</span></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">服务器信息</span></td>
                                                      <td > <span ><?php echo C('server_info');?></span></td>
                                                    </tr>
                                                     <tr>
                                                      <td ><span id="team"> PHP版本</span></td>
                                                      <td ><span ><?php echo C('php');?></span></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">服务器IP</span></td>
                                                      <td ><?php echo C('IP');?></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">服务器语言</span></td>
                                                      <td ><?php echo C('lan');?></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">Mysql</span></td>
                                                      <td ><?php echo C('mysql');?></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">服务器环境</span></td>
                                                      <td ><?php echo C('server');?></td>
                                                    </tr>
                                                     <tr>
                                                      <td colspan="2" > <span style="color:#026b9c;margin-left:10px;font-size:15px;"><?php echo C('Team');?></span></td>
                                                    </tr>
                                                     <tr>
                                                     <td > <span id="team">主程序研发：</span></td>
                                                      <td > <span id="val"><?php echo C('The_team');?></span></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">Leader</span></td>
                                                      <td > <span id="val"><?php echo C('Leader');?></span></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">PHP：</span></td>
                                                      <td > <span id="val"><?php echo C('PHPer');?></span></td>
                                                    </tr>
                                                     <tr>
                                                     <td > <span id="team">IOS</span></td>
                                                      <td > <span id="val"><?php echo C('Ios');?></span></td>
                                                    </tr>
                                                     <tr>
                                                      <td > <span id="team">Android：</span></td>
                                                      <td > <span id="val"><?php echo C('Android');?></span></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div><!-- /.table-responsive -->
                                    </div><!-- /span -->
                                </div><!-- /row -->
                <!--tiles end-->
                <!--dashboard charts and map start-->
            
                <!--dashboard charts and map end-->
                <!--ToDo start-->
              

                <!--ToDo end-->
            </section>
        </section>
        <!--main content end-->
        <!--sidebar right start-->
      
        <!--sidebar right end-->
    </section>
    <!--Global JS-->
    <script src="/Public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/Public/assets/js/application.js"></script>
    <!--Page Level JS-->
   
    <!-- ToDo List  -->
  
    <!--Load these page level functions-->
    <script>
    $(document).ready(function() {
        app.timer();
        app.map();
        app.weather();
        app.morrisPie();
    });
    </script>   

</body>

</html>