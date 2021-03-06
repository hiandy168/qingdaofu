<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use frontend\models\Policy;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\form\ActiveField;
use kartik\editable\Editable;

$this->title = '我的保函';
$this->params['breadcrumbs'][] = $this->title;
$category  = \common\models\CreditorProduct::$category;
$status  = Policy::$status;
?>
<?php if($messageId){echo '<script>window.opener.location.reload(); </script>';}?>
<div class="fa01"> 
    <p class="fa01_img"> <span class="jiedan">我的保函</span>
    </p>
    <div style="position:relative;">
       <a class="btn-select" href="<?=Url::toRoute("create")?>"> <span class="cur-select">申请保函</span></a>
    </div>
</div>
<div class="mytable">
	<table  cellpadding="0" cellspacing="0">
		<thead>
        <tr  style="border:0px solid gray;">
          <th  style="border:0px solid gray;">保函详情</th>
          <th  style="border:0px solid gray;">图片材料</th>
          <th  style="border:0px solid gray;">状态</th>
          <th  style="border:0px solid gray;">操作</th>
        </tr>
        </thead>
		<?php foreach($data->models as $item) : ?>
			<tbody>
				<tr></tr>
				<tr>
				  <th width="300"  style="text-align:left;padding-left:22px;">保函编号：<?= $item->orderid ?></th>
				  <th></th>
				  <th></th>
				  <th><?= date('Y-m-d H:i', $item->created_at) ?></th>
				</tr>
				<tr>
					<td rowspan="3" width="300">
						<dl>
							<dt>法&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;院：</dt>
							<dd><?= $item->fayuan_name ?></dd>
							<dt>案件类型：</dt>
							<dd><?= isset($category[$item->category])?$category[$item->category]:'&nbsp;' ?></dd>
							<dt>案&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</dt>
							<dd><?= $item->anhao ?></dd>
							<dt>联系电话：</dt>
							<dd><?= $item->phone ?></dd>
							<dt>保全金额：</dt>
							<dd><?= isset($item->money)?round($item->money/10000):''?>万</dd>
						</dl>
					</td>
					<td rowspan="3" width="300">
						<p data_id='<?=$item->qisu?>' class='<?=$item->qisu?"preview":'preview_disabled'?>' >起诉书<i>x<?= $item->qisu?count(explode(',',$item->qisu)):'0' ?></i>
						<p data_id='<?=$item->caichan?>' class='<?=$item->caichan?"preview":'preview_disabled'?>' >财产保全申请书<i>x<?= $item->caichan?count(explode(',',$item->caichan)):'0' ?></i>
						<p data_id='<?=$item->zhengju?>' class='<?=$item->zhengju?"preview":'preview_disabled'?>' >相关证据材料<i>x<?= $item->zhengju?count(explode(',',$item->zhengju)):'0' ?></i>
						<p data_id='<?=$item->anjian?>' class='<?=$item->anjian?"preview":'preview_disabled'?>' >案件受理通知书<i>x<?= $item->anjian?count(explode(',',$item->anjian)):'0' ?></i>
					</td>
					<td rowspan="2" width="150" style="padding-right:20px;">
					<p style="text-align:center;color:red;"><?=isset($status[$item->status])?$status[$item->status]:''?></p>
					<?php if($item->status==1){?><p style="color:#777777;font-size:12px;line-height:24px;">请耐心等待，1-3个工作日会有专门的工作人员与您联系</p><?php }?>
					</td>
					<td rowspan="2" width="150"  style="padding-right:20px;"><a href="<?=Url::toRoute(['modify','id'=>$item->id])?>" style="color:#5fc1fe;">编辑图片资料</a></td>
				</tr>
			</tbody>
		<?php endforeach; ?>
       
     
    </table>
	<div class="pages clearfix ">
		<div class="fenye" style="margin-top:30px"> 
		<span class="fenyes" style="font-size:12px;margin:0px 35px -41px;">共<?=$data->pagination->totalCount?>条记录，第<?=$data->pagination->page+1?>/<?=$data->pagination->pageCount?>页</span>
		 <?= yii\widgets\LinkPager::widget([
			'pagination' => $data->pagination
		]) ?>
		</div>
	</div>
</div>
 
<script type="text/javascript">
 $(document).ready(function(){
    $('.preview').click(function(){
		var title = $(this).text();
		var id = $(this).attr('data_id');
		$.ajax({
			url:"<?= yii\helpers\Url::toRoute('picturecategory')?>",
			type:'post',
			data:{id:id,'_csrf':'<?=Yii::$app->getRequest()->getCsrfToken()?>'},
			dataType:'json',
			success:function(json){
				if(json.code == '0000'){
				   var   photojson = {
						"status": 1,
						"msg": title,
						"title": title,
						"id": 0,
						"start": 0,
						"data": []
					};
					$.each(json.data.data,function(item){
						photojson.data.push({
							"alt": title,
							"pid": 0,
							"src": json.data.data[item],
							"thumb": ""
						})
					  
					})  
					// console.log(photojson)
					layer.photos({
						// area: ['80%', 'auto'],
						photos: photojson
					});
				}	
			}
		})
    })
});
</script>
