
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
          <h3 class="box-title">添加下级</h3>
          <div class="hr-inner"> </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
 
          	
          	<!-- row start -->
          	<div class="row">
          	<div class="col-sm-12 view-page-inner">
              <?php ActiveForm::begin(['id' => 'reg-sub-form', 'method'=>'post', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('user/save-reg-sub')]); ?>     
                <div class="form-group" style="margin: 5px;">
                    <label>注册需知</label><br>
                    这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，
                </div>
              	<table  class="table  table-inner"  >
                  <tbody>
                    <tr id="rowid_1">  
                      <td align="right" width="20%">姓名：</td>  
                      <td align="left"  ><input type="text" class="form-control" id="full_name" name="full_name"   placeholder="请输入姓名"></td>
                    </tr>
                    <tr id="rowid_1">  
                      <td align="right" width="20%">手机号：</td>  
                      <td align="left"  ><input type="text" class="form-control" id="phone" name="phone"   placeholder="请输入手机号"></td>
                    </tr>
                    <tr id="rowid_1">  
                      <td align="right" width="20%">用户名：</td>  
                      <td align="left"  ><input type="text" class="form-control" id="uname" name="uname"   placeholder="请输入用户名"></td>
                    </tr>
                    <tr id="rowid_1">  
                      <td align="right" width="20%">密码：</td>  
                      <td align="left"  ><input type="text" class="form-control" id="password" name="password"   placeholder="请输入密码"></td>
                    </tr>
                    <tr id="rowid_1">  
                      <td align="right" width="20%"><button id="create_btn" type="submit" class="btn btn-sm btn-primary">确认注册</button></td>  
                      <td align="left"  > </td>
                    </tr>

                  </tbody>
                </table>
              <?php ActiveForm::end(); ?> 
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
<script type="text/javascript">
  <?php
    if(isset($msg) && $msg){
      echo 'alert("'.$msg.'");';
      //echo 'location.href="'.Url::toRoute(['user/upgrade-log-sub']).'";';
    }
  ?>
</script>
<?php $this->beginBlock('footer');  ?>

<?php $this->endBlock(); ?>