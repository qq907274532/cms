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
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a>
                            </li>
                            <li>权限管理</li>
                            <li class="active">角色列表</li>
                             <li class="pull-right"><a  href="<?php echo U('Role/add');?>" class="btn btn-info">添加角色</a></li>
                        </ul>
                        <!--breadcrumbs end -->
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">角色管理</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>         
                                            <th>ID</th>
                                            <th>角色名称</th>
                                          
                                            <th>状态</th>
                                            <th>排序</th>
                                           
                                            <th>操作</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                       <?php if(is_array($data["list"])): $i = 0; $__LIST__ = $data["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                                        <td>
                                                            <?php echo ($v["id"]); ?>
                                                        </td>
                                                        
                                                        <td class="hidden-480"><span class="label label-info  arrowed-in-right"><?php echo ($v["title"]); ?></span></td>
                                                        <td>
                                                           <?php if($v["status"] == '1'): ?><span class="label label-success arrowed">正常</span>
                                                            <?php else: ?>
                                                               <span class="label  label-warning arrowed ">禁用</span><?php endif; ?>
                                                        </td>

                                                        <td class="hidden-480">
                                                            <span class="badge badge-purple"><?php echo ($v["sort"]); ?></span>
                                                            
                                                        </td>
                                                        
                                                        <td>
                                                            <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">


                                                                <a href="<?php echo U('Role/rbac',array('id'=>$v['id']));?>" >
                                                                    <i class="fa fa-unlock-alt"></i>
                                                                </a>
                                                                

                                                                
                                                                <a href="<?php echo U('Role/edit',array('id'=>$v['id']));?>" >
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>

                                                                <a onclick="if(confirm('确认删除?')) location.href='<?php echo U('Role/del',array('id'=>$v[id]));?>'"  href="javascript:;"  >
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>

                                                                
                                                            </div>

                                                            
                                                        </td>
                                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                      </tbody>
                                </table>

                            </div>
                            <div class="col-sm-6 pull-right">
                                <div class="dataTables_paginate paging_bootstrap ">
                                    <ul class="pagination ">
                                    <?php echo ($data["page"]); ?>
                                    </ul>
                                </div>
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
    <!--Global JS-->
    <script src="/Public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/Public/assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="/Public/assets/js/application.js"></script>
    <!--Page Leve JS -->
    <script src="/Public/assets/plugins/dataTables/js/jquery.dataTables.js"></script>
    <script src="/Public/assets/plugins/dataTables/js/dataTables.bootstrap.js"></script>
   

</body>

</html>