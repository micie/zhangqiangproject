
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
          <h3 class="box-title">下级的申请记录</h3>
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
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >申请人</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >申请时间</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >旧等级</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >新等级</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >审核结果</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >审核时间</th>
                    <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >操作</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
                $row = 0;
                foreach ($his as $v) {
                    echo '<tr id="rowid_' . $v['id'] . '">';
                    echo '  <td align="left" width="15%">' . $v['sub_full_name'] . '</td>';
                    echo '  <td align="left" width="20%">' . $v['add_time'] . '</td>';
                    echo '  <td align="left" >' . $v['old_level'] . '</td>';
                    echo '  <td align="left" >' . $v['new_level'] . '</td>';
                    echo '  <td align="left" width="15%">' . CommonService::getLevelStatusName($v['status']) . '</td>';
                    echo '  <td align="left"  >' . (($v['approval_time'] > '2017-01-01')?$v['approval_time'] :'无'). '</td>';
                    echo '  <td align="left"  > <a href="'.Url::toRoute(['user/upgrade-log-sub','id'=>$v['id'],'status'=>1]).'">同意</a> / <a href="'.Url::toRoute(['user/upgrade-log-sub','id'=>$v['id'],'status'=>2]).'">不同意</a></td>';
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
<script type="text/javascript">
  <?php
    if(isset($msg) && $msg){
      echo 'alert("'.$msg.'");';
      echo 'location.href="'.Url::toRoute(['user/upgrade-log-sub']).'";';
    }
  ?>
</script>
<?php $this->beginBlock('footer');  ?>

<?php $this->endBlock(); ?>