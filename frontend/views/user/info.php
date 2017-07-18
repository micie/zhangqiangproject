
<?php
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

?>

<?php $this->beginBlock('header');  ?>
<!-- <head></head>中代码块 -->
<?php $this->endBlock(); ?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      
        <div class="box-header">
          <h3 class="box-title">个人信息</h3>
          <div class="hr-inner"> </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
 
          	
          	<!-- row start -->
          	<div class="row">
          	<div class="col-sm-12 view-page-inner">
          	   <table  class="table  table-inner"  >
                <tbody>
                  <tr id="rowid_1">  
                    <td align="right" width="20%">姓名：</td>  
                    <td align="left"  ><?php echo $user_info['full_name']; ?></td>
                  </tr>
                  <tr id="rowid_1">  
                    <td align="right" width="20%">手机号：</td>  
                    <td align="left"  ><?php echo $user_info['phone']; ?></td>
                  </tr>
                  <tr id="rowid_1">  
                    <td align="right" width="20%">用户名：</td>  
                    <td align="left"  ><?php echo $user_info['uname']; ?></td>
                  </tr>
                  <tr id="rowid_1">  
                    <td align="right" width="20%">等级：</td>  
                    <td align="left"  ><?php echo $user_info['level_name']; ?></td>
                  </tr>
                  <tr id="rowid_1">  
                    <td align="right" width="20%">状态：</td>  
                    <td align="left"  ><?php echo $user_info['status_name']; ?></td>
                  </tr>
                  <tr id="rowid_1">  
                    <td align="right" width="20%">加入时间：</td>  
                    <td align="left"  ><?php echo $user_info['create_date']; ?></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            </div>

  		    <!-- row end -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php $this->beginBlock('footer');  ?>

<?php $this->endBlock(); ?>