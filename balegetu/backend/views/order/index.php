
<?php
use yii\widgets\LinkPager;
use yii\base\Object;
use yii\bootstrap\ActiveForm;
use common\utils\CommonFun;
use yii\helpers\Url;

use backend\models\Order;

$modelLabel = new \backend\models\Order();
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
          <h3 class="box-title">数据列表</h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <button id="create_btn" type="button" class="btn btn-xs btn-primary">添&nbsp;&emsp;加</button>
        			|
        		<button id="delete_btn" type="button" class="btn btn-xs btn-danger">批量删除</button>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <!-- row start search-->
          	<div class="row">
          	<div class="col-sm-12">
                <?php ActiveForm::begin(['id' => 'order-search-form', 'method'=>'get', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('order/index')]); ?>     
                
                  <div class="form-group" style="margin: 5px;">
                      <label><?=$modelLabel->getAttributeLabel('id')?>:</label>
                      <input type="text" class="form-control" id="query[id]" name="query[id]"  value="<?=isset($query["id"]) ? $query["id"] : "" ?>">
                  </div>
              <div class="form-group">
              	<a onclick="searchAction()" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>搜索</a>
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
              $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : '';
		      echo '<th><input id="data_table_check" type="checkbox"></th>';
              echo '<th onclick="orderby(\'id\', \'desc\')" '.CommonFun::sortClass($orderby, 'id').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('id').'</th>';
              echo '<th onclick="orderby(\'order_user_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'order_user_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('order_user_name').'</th>';
              echo '<th onclick="orderby(\'order_user_tel\', \'desc\')" '.CommonFun::sortClass($orderby, 'order_user_tel').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('order_user_tel').'</th>';
              echo '<th onclick="orderby(\'order_num\', \'desc\')" '.CommonFun::sortClass($orderby, 'order_num').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('order_num').'</th>';
              echo '<th onclick="orderby(\'user_id\', \'desc\')" '.CommonFun::sortClass($orderby, 'user_id').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('user_id').'</th>';
              echo '<th onclick="orderby(\'house_id\', \'desc\')" '.CommonFun::sortClass($orderby, 'house_id').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('house_id').'</th>';
              echo '<th onclick="orderby(\'status\', \'desc\')" '.CommonFun::sortClass($orderby, 'status').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('status').'</th>';
              echo '<th onclick="orderby(\'create_data\', \'desc\')" '.CommonFun::sortClass($orderby, 'create_data').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('create_data').'</th>';
              echo '<th onclick="orderby(\'update_data\', \'desc\')" '.CommonFun::sortClass($orderby, 'update_data').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('update_data').'</th>';
         
			?>
	
            <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >操作</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
            foreach ($models as $model) {
                echo '<tr id="rowid_' . $model->id . '">';
                echo '  <td><label><input type="checkbox" value="' . $model->id . '"></label></td>';
                echo '  <td>' . $model->id . '</td>';
                echo '  <td>' . $model->order_user_name . '</td>';
                echo '  <td>' . $model->order_user_tel . '</td>';
                echo '  <td>' . $model->order_num . '</td>';
                echo '  <td>' . $model->user_id . '</td>';
                echo '  <td>' . $model->house_id . '</td>';
                echo '  <td>' . $model->status . '</td>';
                echo '  <td>' . $model->create_data . '</td>';
                echo '  <td>' . $model->update_data . '</td>';
                echo '  <td class="center">';
                echo '      <a id="view_btn" onclick="viewAction(' . $model->id . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>查看</a>';
                echo '      <a id="edit_btn" onclick="editAction(' . $model->id . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-edit icon-white"></i>修改</a>';
                echo '      <a id="delete_btn" onclick="deleteAction(' . $model->id . ')" class="btn btn-danger btn-sm" href="#"> <i class="glyphicon glyphicon-trash icon-white"></i>删除</a>';
                echo '  </td>';
                echo '</tr>';
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
            		从<?= $pages->getPage() * $pages->getPageSize() + 1 ?>            		到 <?= ($pageCount = ($pages->getPage() + 1) * $pages->getPageSize()) < $pages->totalCount ?  $pageCount : $pages->totalCount?>            		 共 <?= $pages->totalCount?> 条记录</div>
            	</div>
            </div>
          	<div class="col-sm-7">
              	<div class="dataTables_paginate paging_simple_numbers" id="data_table_paginate">
              	<?= LinkPager::widget([
              	    'pagination' => $pages,
              	    'nextPageLabel' => '»',
              	    'prevPageLabel' => '«',
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
                <?php $form = ActiveForm::begin(["id" => "order-form", "class"=>"form-horizontal", "action"=>Url::toRoute("order/save")]); ?>                      
                 
          <input type="hidden" class="form-control" id="id" name="id" />

          <div id="order_user_name_div" class="form-group">
              <label for="order_user_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("order_user_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="order_user_name" name="Order[order_user_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="order_user_tel_div" class="form-group">
              <label for="order_user_tel" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("order_user_tel")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="order_user_tel" name="Order[order_user_tel]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="order_num_div" class="form-group">
              <label for="order_num" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("order_num")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="order_num" name="Order[order_num]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="user_id_div" class="form-group">
              <label for="user_id" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("user_id")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="user_id" name="Order[user_id]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="house_id_div" class="form-group">
              <label for="house_id" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("house_id")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="house_id" name="Order[house_id]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="status_div" class="form-group">
              <label for="status" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("status")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="status" name="Order[status]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="create_data_div" class="form-group">
              <label for="create_data" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("create_data")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="create_data" name="Order[create_data]" placeholder="" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="update_data_div" class="form-group">
              <label for="update_data" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("update_data")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="update_data" name="Order[update_data]" placeholder="" />
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
function orderby(field, op){
	 var url = window.location.search;
	 var optemp = field + " desc";
	 if(url.indexOf('orderby') != -1){
		 url = url.replace(/orderby=([^&?]*)/ig,  function($0, $1){ 
			 var optemp = field + " desc";
			 optemp = decodeURI($1) != optemp ? optemp : field + " asc";
			 return "orderby=" + optemp;
		   }); 
	 }
	 else{
		 if(url.indexOf('?') != -1){
			 url = url + "&orderby=" + encodeURI(optemp);
		 }
		 else{
			 url = url + "?orderby=" + encodeURI(optemp);
		 }
	 }
	 window.location.href=url; 
 }
 function searchAction(){
		$('#order-search-form').submit();
	}
 function viewAction(id){
		initModel(id, 'view', 'fun');
	}

 function initEditSystemModule(data, type){
	if(type == 'create'){
		$("#id").val('');
		$("#order_user_name").val('');
		$("#order_user_tel").val('');
		$("#order_num").val('');
		$("#user_id").val('');
		$("#house_id").val('');
		$("#status").val('');
		$("#create_data").val('');
		$("#update_data").val('');
		
	}
	else{
		$("#id").val(data.id);
    	$("#order_user_name").val(data.order_user_name);
    	$("#order_user_tel").val(data.order_user_tel);
    	$("#order_num").val(data.order_num);
    	$("#user_id").val(data.user_id);
    	$("#house_id").val(data.house_id);
    	$("#status").val(data.status);
    	$("#create_data").val(data.create_data);
    	$("#update_data").val(data.update_data);
    	}
	if(type == "view"){
      $("#id").attr({readonly:true,disabled:true});
      $("#order_user_name").attr({readonly:true,disabled:true});
      $("#order_user_tel").attr({readonly:true,disabled:true});
      $("#order_num").attr({readonly:true,disabled:true});
      $("#user_id").attr({readonly:true,disabled:true});
      $("#house_id").attr({readonly:true,disabled:true});
      $("#status").attr({readonly:true,disabled:true});
      $("#create_data").attr({readonly:true,disabled:true});
      $("#update_data").attr({readonly:true,disabled:true});
	$('#edit_dialog_ok').addClass('hidden');
	}
	else{
      $("#id").attr({readonly:false,disabled:false});
      $("#order_user_name").attr({readonly:false,disabled:false});
      $("#order_user_tel").attr({readonly:false,disabled:false});
      $("#order_num").attr({readonly:false,disabled:false});
      $("#user_id").attr({readonly:false,disabled:false});
      $("#house_id").attr({readonly:false,disabled:false});
      $("#status").attr({readonly:false,disabled:false});
      $("#create_data").attr({readonly:false,disabled:false});
      $("#update_data").attr({readonly:false,disabled:false});
		$('#edit_dialog_ok').removeClass('hidden');
		}
		$('#edit_dialog').modal('show');
}

function initModel(id, type, fun){
	
	$.ajax({
		   type: "GET",
		   url: "<?=Url::toRoute('order/view')?>",
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
				   url: "<?=Url::toRoute('order/delete')?>",
				   data: {"ids":ids},
				   cache: false,
				   dataType:"json",
				   error: function (xmlHttpRequest, textStatus, errorThrown) {
					    admin_tool.alert('msg_info', '出错了，' + textStatus, 'warning');
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
	$('#order-form').submit();
});

$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});

$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#order-form').bind('submit', function(e) {
	e.preventDefault();
	var id = $("#id").val();
	var action = id == "" ? "<?=Url::toRoute('order/create')?>" : "<?=Url::toRoute('order/update')?>";
    $(this).ajaxSubmit({
    	type: "post",
    	dataType:"json",
    	url: action,
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