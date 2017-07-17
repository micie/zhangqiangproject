
<?php
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use frontend\models\Question;
use yii\helpers\Url;

$modelLabel = new \frontend\models\Announcement();
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
          <h3 class="box-title">常见问题</h3>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
 
            
            <!-- row start -->
            <div class="row">
            <div class="col-sm-12">
            <table id="data_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="data_table_info">
            <tbody>
            
            <?php
            $row = 0;
            foreach ($models as $model) {
                echo '<tr id="rowid_' . $model->id . '">';
                echo '  <td align="left" width="80%">' . $model->question . '</td>';
                echo '  <td align="right">';
                echo '      <a id="view_btn"   class="btn btn-primary btn-sm" href="'.Url::toRoute(['question/view','id'=>$model->id]).'"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>查看</a>';
                echo '  </td>';
                echo '<tr/>';
            }
            
            ?>
            
           
           
            </tbody>
            <!-- <tfoot></tfoot> -->
          </table>
          </div>
          </div>
          <!-- row end -->
          
          <!-- row start -->
          <!-- <div class="row">
            <div class="col-sm-5">
              <div class="dataTables_info" id="data_table_info" role="status" aria-live="polite">
                <div class="infos">
                从<?= $pages->getPage() * $pages->getPageSize() + 1 ?>               到 <?= ($pageCount = ($pages->getPage() + 1) * $pages->getPageSize()) < $pages->totalCount ?  $pageCount : $pages->totalCount?>                 共 <?= $pages->totalCount?> 条记录</div>
              </div>
            </div>
            <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="data_table_paginate">
                <?= LinkPager::widget([
                    'pagination' => $pages,
                    'nextPageLabel' => '下一页',
                    'prevPageLabel' => '上一页',
                    'firstPageLabel' => '首页',
                    'lastPageLabel' => '尾页',
                ]); ?>  
                
                </div>
            </div>
          </div> -->
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