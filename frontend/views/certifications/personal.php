<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$type = '1';
?>
<div class="content_right1">
        <div class="right-too">
          <div class="right-topl">
            <p>个人认证</p>
          </div>
          <!--<div class="right-topr">
            <p>在线提交申请后，我们的专业律师将在1个工作日内与您联系</p>
          </div>-->
        </div>
        <div class="right-next">
          <div class="right-topl">
            <p>身份信息</p>
          </div>
        </div>
        <?php
		$form = ActiveForm::begin([
					'id'=>'personal'
		]);
		?>
          <div class="detail pl" style="display: block;">
		   <?= Html::activeHiddenInput($model,'category',array('value'=>1)) ?>
            <ul>
              <li> <span><i class="red">*</i>姓名</span> 
					<?= $form->field($model,'name',['options'=>['tag'=>'code'],'template'=>'{input}{error}'])->textInput(['placeholder'=>'真实姓名，需与身份证一致','style'=>"width: 300px;"]);?>
			  </li>
              <li> 
					<span><i class="red">*</i>身份证号码</span>
					<?= $form->field($model,'cardno',['options'=>['tag'=>'code'],'template'=>'{input}{error}'])->textInput(['placeholder'=>'填写身份证号码','style'=>'width:300px']);?>
			  </li>
              <li class='pic'>
                  <span style="vertical-align:middle;float:left;"><i class="red">*</i>身份证</span>
				  <?php //echo \yii\helpers\Html::hiddenInput('cardimgId1',isset($model->cardimgimg)?$model->cardimgimg:'',['id'=>'cardimg','cardimgId'=>'cardimgId1','class'=>'car']);?>
				  <?php echo \yii\helpers\Html::hiddenInput('cardimg1',isset($model->cardimg)?$model->cardimg:'',['id'=>'cardimg1','cardimg'=>'cardimg1','class'=>'cars']);?>
                  <?php if($type == 1&&$data){?>
							<?php  $i=1;$b=1;?>
							<?php foreach($data as $k=>$v){ ?>
							<span style="margin-left:6px;">
								<i class="closebutton" data-type='<?php echo $type; ?>' style="position:absolute;"><img src="/images/hint33.png" width="35" height="35"></i><img src="<?php echo isset($v['file'])?Yii::$app->params['www'].$v['file']:''?>" style="display:inline-block;" class="add_tu_0<?php echo $b++?>" inputName="cardimg" cardimgId="cardimgimg" limit="2" data_type='<?php echo $i++?>' data_bid="<?php echo $v['id']; ?>" width="120" height="120"/>
							</span>
							<?php } ?>
							<?php if(count($data) == 1){ ?>
							<span style="margin-left:6px;"><img src="/bate2.0/images/tu.png" inputName='cardimg1' class='add_tu_02' limit = '5' cardimgId="cardimgimg" width="120" height="120" data_type='2'></span>
							<?php } ?>
			
						<?php }else{ ?>
							<span style="margin-left:6px;"><img src="/bate2.0/images/tu.png" inputName='cardimg1' class='add_tu_01' limit = '5' cardimgId="cardimgimg" width="120" height="120" data_type='1'></span>
							<span style="margin-left:20px;"><img src="/bate2.0/images/tu.png" inputName='cardimg1' class='add_tu_02' limit = '5' cardimgId="cardimgimg" width="120" height="120" data_type='2'></span>
						<?php } ?>
						<div class="truct">
                                <p>请上传手持身份证正反面</p>
                                <p>文件小于2M</p>
                                <p>支持JPG/PNG/BMP等格式图片 </p>
								<?= $form->field($model,'cardimgimg',['options'=>['tag'=>'code'],'template'=>'{input}{error}'])->hiddenInput(['id'=>'cardimgimg','cardimgId'=>'cardimgimg','class'=>'car'])?>
								<?= $form->field($model,'cardimgimg1',['options'=>['tag'=>'code'],'template'=>'{input}{error}'])->hiddenInput(['id'=>'cardimgimg1','cardimgId'=>'cardimgimg1','class'=>'car'])?>
                        </div>
						
				</li>
				<li> 
					<span><i class="red">*</i>电话号码</span>
                    <?= $form->field($model,'mobile',['options'=>['tag'=>'code'],'template'=>'{input}{error}'])->textInput(['placeholder'=>'请输入申请人联系方式','style'=>'width:300px']);?>					
				</li>
				<li> <span><i class="red"></i>邮箱</span>
					<?= $form->field($model,'email',['options'=>['tag'=>'code'],'template'=>'{input}{error}'])->textInput(['placeholder'=>'选填','style'=>'width:300px']);?>
				</li>
            </ul>
          </div>
          <input class="btn buttonev01" type="button" value="立即认证" onclick="$('#personal').submit()" >
        <?php ActiveForm::end();?>
</div>
<script src="/js/ajaxfileupload.js" type="text/javascript"></script>
<input  style='display:none' type="file" name="Filedata" id='id_photos' value="" />
<script>
$(document).ready(function(){
	$('form#personal').on('beforeSubmit',function(){
		var index = layer.load(1, {
		  shade: [0.4,'#fff'] //0.1透明度的白色背景
		});
		$.ajax({
			url:'<?= Url::toRoute('/certifications/add');?>',
			type:'post',
			data:$('#personal').serialize(),
			dataType:'json',
			success:function(json){
				if(json.code == '0000'){
					//alert(789);exit;
					layer.msg(json.msg,{time:2000},function(){ window.location.reload();});
					layer.close(index);
				}else{
					layer.msg(json.msg,{time:2000},function(){ window.location.reload();});
				}
			}
		})
		return false;
	})
	
	
	
	//照片异步上传
	$(document).on("click",".closebutton",function(){
		        var wx = "<?php echo Yii::$app->params['www'];?>";
				var cardimgId = $('#cardimgimg').attr('cardimgid');//$(this).parents('.pic').children('.car').attr('cardimgId');
				var cardimg = $(this).parents('.pic').children('.cars').attr('cardimg');
                var id = $("#"+cardimgId).val();
                var bid = $(this).next().attr('data_bid');
				var data_type = $(this).next().attr('data_type');
                var temp='';
                var ids =id.split(',');
                for(i in ids){
                    		if(ids[i]==bid){
                    			continue;
                    		}
                    		temp+=temp?","+ids[i]:ids[i];
                    	}
				var src = $(this).next('img').attr('src').replace(wx,'');
				var img = $(this).parents().children('input[name='+cardimg+']').val();
                            img = img.replace(src,"");
                            img = img.replace(",''","");
                            img = img.replace("'',","");
                            img = img.replace("''","");
                            $('input[name='+cardimg+']').val(img);			
               	$("#"+cardimgId).val(temp);
				var type = $(this).attr('data-type');
				if(type == 1){
					$(this).parent().css("margin-left","1px");
					if(data_type == 1){
					 var imgs = '<img src="/bate2.0/images/tu.png" inputName="'+cardimg+'" class="add_tu_01" limit = "2" cardimgId="'+cardimgId+'" width="120" height="120" data_type="1">';
				     $(this).parent().html(imgs);
		
					}else{
						var imgs = '<img src="/bate2.0/images/tu.png" inputName="'+cardimg+'" class="add_tu_02" limit = "2" cardimgId="'+cardimgId+'" width="120" height="120" data_type="2">';
						$(this).parent().html(imgs);
		
					}
				}else{
					 var imgs = '<img src="/bate2.0/images/tu.png" inputName="'+cardimg+'" class="add_tu_02" limit = "2" cardimgId="'+cardimgId+'" width="120" height="120" data_type="2">';
				     $(this).parent().html(imgs);
				}
				
    });
	 
	 //照片异步上传
	$(document).on('click',".add_tu_01",function(){
		var limit = $(this).attr('limit')?$(this).attr('limit'):2;
		var inputName = $(this).attr('inputName')?$(this).attr('inputName'):'';
		var cardimgId = $(this).attr('cardimgId')?$(this).attr('cardimgId'):'';
		var data_type = $(this).attr('data_type');
		if(!inputName)return false;
		$("#id_photos").attr({"inputName":inputName,"cardimgId":cardimgId,"limit":limit,'data_type':data_type}).click();
	})
	
	$(document).on('click',".add_tu_02",function(){
		var limit = $(this).attr('limit')?$(this).attr('limit'):2;
		var inputName = $(this).attr('inputName')?$(this).attr('inputName'):'';
		var cardimgId = $(this).attr('cardimgId')?$(this).attr('cardimgId'):'';
		var data_type = $(this).attr('data_type');
		if(!inputName)return false;
		$("#id_photos").attr({"inputName":inputName,"cardimgId":cardimgId,"limit":limit,'data_type':data_type}).click();
	})
	$(document).on("change",'#id_photos',function(){ //此处用了change事件，当选择好图片打开，关闭窗口时触发此事件
		var index = layer.load(1, {
		  shade: [0.4,'#fff'] //0.1透明度的白色背景
		});
		var inputName = $(this).attr('inputName');
		var cardimgId = $(this).attr('cardimgId');
		var data_type = $(this).attr('data_type');
 
		var limit = $(this).attr('limit')?$(this).attr('limit'):2;
		var aa = $("#"+inputName).val();
		var bb = $("#"+cardimgId).val();
		// if(limit&&aa.split(",").length>=limit){
			// layer.close(index)
			// layer.alert("最多上传"+limit+"张图片");
			// $("#"+inputName).parents(".pic").hide()
			// return false;
		// } 
		if(!inputName)return false;
		$.ajaxFileUpload({
			url:"<?php echo yii\helpers\Url::toRoute(['/site/upload','filetype'=>1,'_csrf'=>Yii::$app->getRequest()->getCsrfToken()])?>",
			type: "POST",
			secureuri: false,
			fileElementId: 'id_photos',
			data: {'_csrf':'<?=Yii::$app->getRequest()->getCsrfToken()?>'},
			textareas:{},
			dataType: "json",
			success: function (data) {
				layer.close(index) 
				var wx = "<?php echo Yii::$app->params['www'];?>";
				if(data.error == '0'&&data.fileid){					
					var aa = $("#"+inputName).val();
                    var bb = $("#"+cardimgId).val();					
					if(limit&&aa.split(",").length>=limit){
						layer.alert("最多上传"+limit+"张图片");
						$("#"+inputName).parents(".pic").hide()
						return false;
					}   				
                    $("#"+cardimgId).val((bb ? (bb + ",") : '')+data.fileid).trigger("change");										
					$('input[name=' + inputName + ']').val((aa ? (aa + ",") : '')+"'"+data.url+"'").trigger("change"); 
					if($('input[name=Filedata]').attr('data_type')==1){
							 var div = '<i class="closebutton" data-type="1" style="position:absolute;"><img src="/images/hint33.png" width="35" height="35"></i><img src="'+wx+data.url+'"  data_bid="'+data.fileid+'" style="display:inline-block;" class="add_tu_06" inputName="cardimg" cardimgId="cardimgimg" limit="2" data_type="1" width="120" height="120"/>';	
							 $("input[name='" + inputName + "']").next('span').css("margin-left","6px");
							 var spandiv = $("input[name='" + inputName + "']").next().html(div);
						}else{
							var div = '<i class="closebutton" data-type="2" style="position:absolute;"><img src="/images/hint33.png" width="35" height="35"></i><img src="'+wx+data.url+'"  data_bid="'+data.fileid+'" style="display:inline-block;" class="add_tu_06" inputName="cardimg" cardimgId="cardimgimg"  limit="2" data_type="2" width="120" height="120"/>';	
							$("input[name='" + inputName + "']").next('span').css("margin-left","6px");
							var spandiv = $("input[name='" + inputName + "']").next().next().html(div);
						}
				}else if(data.msg){
					layer.alert(""+data.msg)
				}
			},
			error:function(){
				layer.close(index)
			}
		}); 
	});
	$(document).on("click",".add_tu_06",function(){
		var   photojson = {
			"status": 1,
			"msg": "查看",
			"title": "查看",
			"id": 0,
			"start": 0,
			"data": []
		};
		photojson.data.push({
			"alt": "",
			"pid": 0,
			"src": $(this).attr("src"),
			"thumb": ""
		})
		 
		layer.photos({
			area: ['auto', '80%'],
			photos: photojson
		});
    })
});
</script>