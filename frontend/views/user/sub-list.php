
<?php
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use backend\services\CommonService;

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
          <h3 class="box-title">我的下级人员</h3>
          <div class="hr-inner"> </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
 
          	
          	<!-- row start -->
          	<div class="row">
          	<div class="col-sm-12 view-page-inner">
            	<table id="data_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="data_table_info">
                <thead>
                  <tr role="row">           
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >姓名</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >等级</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >位置</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >用户名</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >手机号</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >加入时间</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >下级</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
                  $row = 0;
                  foreach ($list as $v) {
                      echo '<tr id="rowid_' . $v['id'] . '">';
                      echo '  <td align="left" width="10%">' . $v['full_name'] . '</td>';
                      echo '  <td align="left" >' . $v['level'] . '</td>';
                      echo '  <td align="left" width="15%">' . CommonService::getRoleName($v['role']) . '</td>';
                      echo '  <td align="left" width="15%">' . $v['uname'] . '</td>';
                      echo '  <td align="left" width="15%">' . $v['phone'] . '</td>';
                      echo '  <td align="left" width="20%">' . $v['create_date'] . '</td>';
                      echo ' <td align="left" width="10%"><a href="'.Url::toRoute(['user/sub-list','top_user_id'=>$v['id']]).'">下级</a></td>';
                      echo '</tr>';
                  }
                
                ?>              
               
                </tbody>
                <!-- <tfoot></tfoot> -->
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