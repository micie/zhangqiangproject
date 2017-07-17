<?php
//use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '管理后台';

$route = $this->context->route;
$absoluteUrl = Yii::$app->request->absoluteUrl;

$otherMenu = true;


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$this->title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=Url::base()?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=Url::base()?>/libs/font-awesome.min.css">
  <!-- Ionicons  -->
  <link rel="stylesheet" href="<?=Url::base()?>/libs/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=Url::base()?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=Url::base()?>/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=Url::base()?>/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=Url::base()?>/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=Url::base()?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=Url::base()?>/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=Url::base()?>/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=Url::base()?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=Url::base()?>/plugins/datatables/dataTables.bootstrap.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery 2.2.3 -->
  <script src="<?=Url::base()?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <link rel="stylesheet" href="<?=Url::base()?>/css/added.css">

  
  <script>
    $(function($){
        window.admin_tool = function(){
            return {
            	confirm : function(content, ok_fun){
            		$('#confirm_content').text(content);
          			$('#confirm_dialog_ok').click(function(){
          				ok_fun();
          				$('#confirm_dialog').modal('hide'); 
          			});
          			$('#confirm_dialog').modal('show');
          		},
          		alert : function(id, msg, type){
              		var alert_type = '';
              		switch(type){
              			case 'success':
              				alert_type = 'alert-success';
                  			break;
              			case 'warning':
              				alert_type = 'alert-warning';
                  			break;
              			case 'danger':
              				alert_type = 'alert-danger';
                  			break;
                  		default:
                  			alert_type = 'alert-info';
              		}
              		$('#' + id).html('<div class="alert ' + alert_type + ' alert-dismissable">'
                      		+ '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + msg + '</div>');
          		}
            };
        }();

        // 全选
        $('#data_table_check').click( function() {
            var b = this.checked;
        	$('#data_table tbody :checkbox').each(function(i){
        		this.checked = b;
        	});
        });
        
  	});
    </script>
  
<?php if(isset($this->blocks['header']) == true):?>
<?= $this->blocks['header'] ?>
<?php endif;?>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="modal fade" id="confirm_dialog" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>请确认</h3>
			</div>
			<div id="confirm_content" class="modal-body">
                
            </div>
			<div class="modal-footer">
				<a id="confirm_dialog_cancel" href="#" class="btn btn-default" data-dismiss="modal">关闭</a> <a
					id="confirm_dialog_ok" href="#" class="btn btn-primary">确定</a>
			</div>
		</div>
	</div>
</div>


<div class="wrapper">
<div class="wrapper-inner">

  <header class="main-header">
    <div class="banner-inner">
      这里是一个广告图片
    </div>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <ul class="nav-menu-inner">
        <li><a href="<?=Url::to(['site/index'])?>">我的主页</a></li>
        <li><a href="<?=Url::to(['announcement/index'])?>">本站公告</a></li>
        <li><a href="<?=Url::to(['question/index'])?>">常见问答</a></li>
        <li><a href="<?=Url::toRoute(['rules/view','id'=>1])?>">规则介绍</a></li>
        <li><a href="<?=Url::to(['site/index'])?>">团队架构图</a></li>
        <li class="last"><a href="<?=Url::toRoute('site/logout')?>" data-method="post">退出</a></li>
      </ul>
      <!-- Sidebar toggle button-->
      <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> -->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user-menu notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">  -->
              <span class="glyphicon glyphicon-user" style="font-size: 16px" alt="User Image"></span>
              <span class="hidden-xs"><?php echo Yii::$app->user->identity->uname;?>&nbsp;&nbsp;</span>
              <span class="fa fa-caret-down"></span>
            </a>
             
              <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Body -->
              <li class="user-body">
              	<ul class="menu">
            		<!-- <li><a href="<?=Url::toRoute('site/psw')?>"><i class="fa fa-cog"></i> 修改密码</a></li> -->
                	<li><a href="<?=Url::toRoute('site/logout')?>" data-method="post"><i class="fa fa-sign-out"></i> 退出</a></li>
            	</ul>
            
            </ul>
              
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- Sidebar user panel -->
      
      <div class="user-panel">
        <div class="pull-left image">
          <span class="glyphicon glyphicon-user" style="font-size: 50px"></span>
        </div>
        
        <div class="pull-left info">
          <p>欢迎您</p>
          <p><?php echo Yii::$app->user->identity->full_name;?></p>
          <!-- <a href="<?=Url::toRoute('site/logout')?>"><i class="fa fa-circle text-success"></i>退出</a> -->
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">


        <li class="active treeview">   
          <a href="#">   <i class="fa fa-table"></i> <span>我的设置</span>   <span class="pull-right-container">       <i class="fa fa-angle-left pull-right"></i>   </span>   </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo Url::toRoute('announcement/index');?>"><i class="fa fa-circle-o"></i>我的资料</a></li>
            <li class="active"><a href="<?php echo Url::toRoute('question/index');?>"><i class="fa fa-circle-o"></i>申请升级</a></li>
            <li class="active"><a href="<?php echo Url::toRoute('rules/index');?>"><i class="fa fa-circle-o"></i>升级记录</a></li>
          </ul>
        </li>    
  
        <li class="active treeview">   
          <a href="#">   <i class="fa fa-table"></i> <span>我的团队</span>   <span class="pull-right-container">       <i class="fa fa-angle-left pull-right"></i>   </span>   </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo Url::toRoute('user-level/index');?>"><i class="fa fa-circle-o"></i>注册账号</a></li>
            <li class="active"><a href="<?php echo Url::toRoute('user-level/index');?>"><i class="fa fa-circle-o"></i>我的下级</a></li>
          </ul>
        </li>    
  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
<!--     <section class="content-header">
     
      <h1>  <small>
      
      </small></h1>
      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="<?=Url::toRoute('site/index')?>"><i class="fa fa-dashboard"></i> 首页</a></li>

      </ol>
    </section> -->
    
      
   
    
    
  <?= $content ?>
  
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>版权所有 &copy; 2016-<?=date('Y')?> <a href="<?=Yii::$app->params['homePage']?>"><?=Yii::$app->params['appName']?></a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- 
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
     -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone  </p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
</div>
<!-- ./wrapper -->


<script src="<?=Url::base()?>/plugins/form/jquery.form.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?=Url::base()?>/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=Url::base()?>/libs/raphael-min.js"></script>
<script src="<?=Url::base()?>/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=Url::base()?>/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=Url::base()?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=Url::base()?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=Url::base()?>/plugins/knob/jquery.knob.js"></script>
 
<!-- daterangepicker -->
<script src="<?=Url::base()?>/libs/moment.min.js"></script>
<script src="<?=Url::base()?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=Url::base()?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=Url::base()?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=Url::base()?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=Url::base()?>/plugins/fastclick/fastclick.js"></script>
<!-- DataTables -->
<script src="<?=Url::base()?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=Url::base()?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?=Url::base()?>/plugins/treeview/bootstrap-treeview.min.js"></script>

<!-- AdminLTE App -->
<script src="<?=Url::base()?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=Url::base()?>/dist/js/demo.js"></script>


</body>

<?php if(isset($this->blocks['footer']) == true):?>
<?= $this->blocks['footer'] ?>
<?php endif;?>
</html>