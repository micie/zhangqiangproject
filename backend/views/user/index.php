
<?php
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use backend\models\User;
use yii\helpers\Url;
use backend\services\CommonService;

$modelLabel = new \backend\models\User();
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
          <h3 class="box-title">会员管理</h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                
              
            <!-- <button id="delete_btn" type="button" class="btn btn-xs btn-danger">批量删除</button> -->
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <!-- row start search-->
            <div class="row">
            <div class="col-sm-12">
                <?php ActiveForm::begin(['id' => 'User-search-form', 'method'=>'get', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('User/index')]); ?>     
                
                  <div class="form-group" style="margin: 5px;">
                      <label><?=$modelLabel->getAttributeLabel('id')?>:</label>
                      <input type="text" class="form-control" id="query[id]" name="query[id]"  value="<?=isset($query["id"]) ? $query["id"] : "" ?>">
                  </div>
              <div class="form-group">
                <a onclick="searchAction()" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>搜索</a> | <button id="create_btn" type="button" class="btn btn-sm btn-primary">添加</button>
              </div>
               <?php ActiveForm::end(); ?> 
            </div>
            </div>
            <!-- row end search -->
            
            <!-- row start -->
            <div class="row">
            <div class="col-sm-12">
            <table id="data_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="data_table_info">
            <thead>
            <tr role="row">
            
            <?php 
          echo '<th><input id="data_table_check" type="checkbox"></th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >ID</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >用户名</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >手机号</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >姓名</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >上级</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >位置</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >加入时间</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >等级</th>';
              echo '<th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >状态</th>';
         
      ?>
  
            <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >操作</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
            $row = 0;
            foreach ($models as $model) {
                echo '<tr id="rowid_' . $model['id'] . '">';
                echo '  <td><label><input type="checkbox" value="' . $model['id'] . '"></label></td>';
                echo '  <td>' . $model['id'] . '</td>';
                echo '  <td>' . $model['uname'] . '</td>';
                echo '  <td>' . $model['phone'] . '</td>';
                echo '  <td>' . $model['full_name'] . '</td>';
                echo '  <td>' . $model['top_full_name'] . '</td>';
                echo '  <td>' . CommonService::getRoleName($model['role']) . '</td>';
                echo '  <td>' . $model['create_date'] . '</td>';
                echo '  <td>' . $model['level'] . '</td>';
                echo '  <td>' . CommonService::getStatusName($model['status']) . '</td>';
                echo '  <td class="center">';
                echo '      <a id="view_btn" onclick="viewAction(' . $model['id'] . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>查看</a>';
                 echo '      <a id="edit_btn" onclick="editAction(' . $model['id'] . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-edit icon-white"></i>修改</a>';
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
          <div class="row">
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

<div class="modal fade" id="edit_dialog" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
      </div>
      <div class="modal-body">
                <?php $form = ActiveForm::begin(["id" => "user-form", "class"=>"form-horizontal", "action"=>Url::toRoute("user/save")]); ?>                      
                 <input type="hidden" class="form-control" id="id" name="User[id]" />
                 <!-- 
          <div id="id_div" class="form-group">
              <label for="id" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("id")?></label>
              <div class="col-sm-10">
          
              </div>
              <div class="clearfix"></div>
          </div>
             -->
          <div id="uname_div" class="form-group">
              <label for="uname" class="col-sm-2 control-label">用户名</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="uname" name="User[uname]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>
          <div id="full_name_div" class="form-group">
              <label for="full_name" class="col-sm-2 control-label">姓名</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="full_name" name="User[full_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>
          <div id="phone_div" class="form-group">
              <label for="phone" class="col-sm-2 control-label">电话</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="phone" name="User[phone]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>
          <div id="status_div" class="form-group">
              <label for="status" class="col-sm-2 control-label">状态</label>
              <div class="col-sm-10">
                  <input type="radio" id="status0" name="User[status]" value="0" />正常&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" id="status1" name="User[status]" value="1"  />禁用&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" id="status2" name="User[status]" value="2"  />被替代 
              </div>
              <div class="clearfix"></div>
          </div>
          <div id="create_date_div" class="form-group">
              <label for="create_date" class="col-sm-2 control-label">加入时间</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="create_date" name="User[create_date]" placeholder="格式：2017-01-01" />
              </div>
              <div class="clearfix"></div>
          </div>
          <div id="level_div" class="form-group">
              <label for="level" class="col-sm-2 control-label">等级</label>
              <div class="col-sm-10">
                  <input type="number" class="form-control" id="level" name="User[level]" placeholder="1-10级" min="1" max="10" />
              </div>
              <div class="clearfix"></div>
          </div>
          <div id="sex_div" class="form-group">
              <label for="sex" class="col-sm-2 control-label">性别</label>
              <div class="col-sm-10">
                  <input type="radio" id="sex0" name="User[status]" value="0" />男&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" id="sex1" name="User[status]" value="1"  />女
              </div>
              <div class="clearfix"></div>
          </div>
        


      <?php ActiveForm::end(); ?>          
                </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-default" data-dismiss="modal">关闭</a> <a
          id="edit_dialog_ok" href="#" class="btn btn-primary">确定</a>
      </div>
    </div>
  </div>
</div>
<?php $this->beginBlock('footer');  ?>
<!-- <body></body>后代码块 -->
 <script>
 function searchAction(){
    $('#User-search-form').submit();
  }
 function viewAction(id){
    initModel(id, 'view', 'fun');
  }

 function initEditSystemModule(data, type){
  if(type == 'create'){
    $("#id").val('');    
    $("#uname").val('');    
    $("#full_name").val('');    
    $("#phone").val('');    
    $("#level").val('1');    
    $("#top_user_id").val('');    
    $("#sex").val('');    
  }
  else{
    $("#id").val(data.id);
      $("#uname").val(data.uname);
      $("#full_name").val(data.full_name);
      $("#phone").val(data.phone);
      $("#level").val(data.level);
      if(data.status == 0){
        $("#status0").attr('checked','true');
      }
      if(data.status == 1){
        $("#status1").attr('checked','true');
      }
      if(data.status == 2){
        $("#status2").attr('checked','true');
      }
      if(data.sex == 0){
        $("#sex0").attr('checked','true');
      }
      if(data.sex == 1){
        $("#sex1").attr('checked','true');
      }
  }
  if(type == "view"){
      $("#id").attr({readonly:true,disabled:true});
      $("#uname").attr({readonly:true,disabled:true});
      $("#full_name").attr({readonly:true,disabled:true});
      $("#phone").attr({readonly:true,disabled:true});
      $("#status0").attr({readonly:true,disabled:true});
      $("#status1").attr({readonly:true,disabled:true});
      $("#status2").attr({readonly:true,disabled:true});
      $("#level").attr({readonly:true,disabled:true});
      $("#sex0").attr({readonly:true,disabled:true});
      $("#sex1").attr({readonly:true,disabled:true});
    $('#edit_dialog_ok').addClass('hidden');
  }
  else{
      $("#uname").attr({readonly:true,disabled:true});
      $("#id").attr({readonly:false,disabled:false});
      $("#full_name").attr({readonly:false,disabled:false});
      $("#phone").attr({readonly:false,disabled:false});
      $("#status0").attr({readonly:false,disabled:false});
      $("#status1").attr({readonly:false,disabled:false});
      $("#status2").attr({readonly:false,disabled:false});
      $("#level").attr({readonly:false,disabled:false});
      $("#sex0").attr({readonly:false,disabled:false});
      $("#sex1").attr({readonly:false,disabled:false});
      
    $('#edit_dialog_ok').removeClass('hidden');
  }
  $('#edit_dialog').modal('show');
}

function initModel(id, type, fun){
  
  $.ajax({
       type: "GET",
       url: "<?=Url::toRoute('user/view')?>",
       data: {"id":id},
       cache: false,
       dataType:"json",
       error: function (xmlHttpRequest, textStatus, errorThrown) {
          alert("出错了，" + textStatus);
      },
       success: function(data){
         initEditSystemModule(data, type);
       }
    });
}
  
function editAction(id){
  initModel(id, 'edit');
}

function deleteAction(id){
  var ids = [];
  if(!!id == true){
    ids[0] = id;
  }
  else{
    var checkboxs = $('#data_table :checked');
      if(checkboxs.size() > 0){
          var c = 0;
          for(i = 0; i < checkboxs.size(); i++){
              var id = checkboxs.eq(i).val();
              if(id != ""){
                ids[c++] = id;
              }
          }
      }
  }
  if(ids.length > 0){
    admin_tool.confirm('请确认是否删除', function(){
        $.ajax({
           type: "GET",
           url: "<?=Url::toRoute('user/delete')?>",
           data: {"ids":ids},
           cache: false,
           dataType:"json",
           error: function (xmlHttpRequest, textStatus, errorThrown) {
              alert("出错了，" + textStatus);
          },
           success: function(data){
             for(i = 0; i < ids.length; i++){
               $('#rowid_' + ids[i]).remove();
             }
             admin_tool.alert('msg_info', '删除成功', 'success');
             window.location.reload();
           }
        });
    });
  }
  else{
    admin_tool.alert('msg_info', '请先选择要删除的数据', 'warning');
  }
    
}

function getSelectedIdValues(formId)
{
  var value="";
  $( formId + " :checked").each(function(i)
  {
    if(!this.checked)
    {
      return true;
    }
    value += this.value;
    if(i != $("input[name='id']").size()-1)
    {
      value += ",";
    }
   });
  return value;
}

$('#edit_dialog_ok').click(function (e) {
    e.preventDefault();
  $('#user-form').submit();
});

$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});

$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#user-form').bind('submit', function(e) {
  e.preventDefault();
  var id = $("#id").val();
  var action = id == "" ? "<?=Url::toRoute('user/create')?>" : "<?=Url::toRoute('user/update')?>";
    $(this).ajaxSubmit({
      type: "post",
      dataType:"json",
      url: action,
      data:{id:id},
      success: function(value) 
      {
          if(value.errno == 0){
            $('#edit_dialog').modal('hide');
            admin_tool.alert('msg_info', '添加成功', 'success');
            window.location.reload();
          }
          else{
              var json = value.data;
            for(var key in json){
              $('#' + key).attr({'data-placement':'bottom', 'data-content':json[key], 'data-toggle':'popover'}).addClass('popover-show').popover('show');
              
            }
          }

      }
    });
});

 
</script>
<?php $this->endBlock(); ?>