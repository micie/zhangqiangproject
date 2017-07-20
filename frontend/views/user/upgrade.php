
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
          <h3 class="box-title">申请升级</h3>
          <div class="hr-inner"> </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
 
          	
          	<!-- row start -->
          	<div class="row">
          	<div class="col-sm-12 view-page-inner">
          	   <?php ActiveForm::begin(['id' => 'Apply-Upgrade-form', 'method'=>'post', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('user/apply-upgrade')]); ?>
                  <div class="form-group" style="margin: 5px;">
                      <label>申请需知</label><br>
                      这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，这里是文字说明，
                  </div>
                <div class="form-group">
                  <button id="create_btn" type="submit" class="btn btn-sm btn-primary">提交申请</button>
                </div>
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
<?php $this->beginBlock('footer');  ?>

<?php $this->endBlock(); ?>