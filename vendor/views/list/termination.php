<!-- 终止发布 -->
<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
    <table cellspacing="1" cellpadding="0">
        <thead>
        <tr>
            <th>区域</th>
            <th>类型</th>
            <th>编号</th>
            <th>发布时间</th>
            <th>金额(元)</th>
            <th>申请记录(次)</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($creditor as $v):?>
            <tr>
                <td><?php echo isset($v['city_id']) && $v['city_id']== 310100 ?'上海市':''?></td>
                <td><?php echo \frontend\services\Func::$category[$v['category']];?></td>
                <td><?php echo isset($v['code'])?$v['code']:'';?></td>
                <td><?php echo isset($v['create_time'])?date('Y-m-d',$v['create_time']):''?></td>
                <td><?php echo isset($v['money'])?$v['money']:''?></td>
                <td>
                    <?php echo Yii::$app->db->createCommand("select count(*) from zcb_apply where category = {$v['category']} and product_id = {$v['id']}")->queryScalar(); ?>
                </td>
                <td><?php echo \frontend\services\Func::$listMenu[$v['progress_status']];?></td>
                <td><a href="#" onclick="inquire('<?php echo $v['id']?>','<?php echo $v['category']?>');">查看</a> <a href="#" onclick="editUserInfo('<?php echo $v['id']?>','<?php echo $v['category']?>');">编辑</a> <a href="#" onclick="closeProduct('<?php echo \yii\helpers\Url::to('/apply/closeproduct')?>',<?php echo $v['category'];?>,<?php echo $v['id']?>,'3');">终止</a>  <a href="#" onclick="closeProduct('<?php echo \yii\helpers\Url::to('/apply/closeproduct')?>',<?php echo $v['category'];?>,<?php echo $v['id']?>,'4');">结案</a>  </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table><div class="fenye clearfix">
<?= linkPager::widget([
    'firstPageLabel' => '首页',
    'lastPageLabel' => '最后一页',
    'prevPageLabel' => '上一页',
    'nextPageLabel' => '下一页',
    'pagination' => $pagination,
    'maxButtonCount'=>4,
]);?></div>
<script type="text/javascript">
    function inquire(id,uid) {
        var user_url = '';
        if(uid == '1'){
            user_url = "<?php echo Url::to('/apply/treatmentfinancing')?>";
        } else if(uid == '2'|| uid == '3'){
            user_url = "<?php echo Url::to('/apply/treatmentcreditor')?>";
        } else {
            user_url = FALSE;
        }
        if(user_url) {
            location.href = user_url+'?id='+id;
        } else {
            alert('链接有问题！');
        }
    }

    function editUserInfo(id,category){
        if(category == '1'){
            location.href  = "<?php echo Url::to('/publish/afterfinancing')?>/?id="+id;
        } else if(category == '2'|| category == '3'){
            location.href  = "<?php echo Url::to('/publish/aftercreditor')?>/?id="+id;
        }
    }
</script>