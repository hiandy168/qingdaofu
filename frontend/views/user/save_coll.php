<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="details">
    <div class="look">
        <h3>查看信息</h3>
    </div>
    <!-- 融资详情 -->
    <div class="finance">
        <?php foreach($credi as $v):?>
            <?php $value = unserialize($v['guaranteemethod']);
            $guar_other = $value['other'];
            unset($value['other']);
            ?>
            <?php $judicial = unserialize($v['judicialstatusA'])?>
            <span><?php switch(isset($v['category'])?$v['category']:''){
                    case 1:
                        echo '融资';
                        break;
                    case 2;
                        echo '清收';
                        break;
                    case 3;
                        echo '诉讼';
                    default://保留
                        break;
                }?>详情</span>
            <i></i>
            <p>
                借款本金:<?php echo isset($v['money'])?$v['money']:''?>元<br/>
                借款期限:<?php echo isset($v['term'])?$v['term']:''?>月<br/>
                借款利率:<?php echo isset($v['rate'])?$v['rate']:''?>个月<br/>
                还款方式:<?php switch(isset($v['repaymethod'])?$v['repaymethod']:''){
                    case 1:
                        echo $reimbursement[1];
                        break;
                    case 2:
                        echo $reimbursement[2];
                        break;
                    case 3:
                        echo $reimbursement[3];
                        break;
                    default:
                        break;
                }?><br/>
                担保方式:<?php foreach($value as $ke => $va):?>
                    <?php echo isset($guarantee[$va])?$guarantee[$va]:'';?>
                <?php endforeach;?><?php if($guar_other){echo $guar_other;}?><br/>
                担保物(抵押物)所在地:<?php echo isset($v['seatmortgage'])?\frontend\services\Func::getSubstrs($v['seatmortgage']):'';?><br/>
                司法现状:(1)仲裁:<?php foreach($judicial as $ke => $va):?>
                    <?php echo \common\models\creditorProduct:: $judicialstatusA[isset($va)?$va:''];?>
                <?php endforeach;?><br/>
                <em>(2)欠款人是否能正常联系:
                    <?php echo \common\models\creditorProduct:: $judicialstatusB[isset($v['judicialstatusB'])?$v['judicialstatusB']:''];?>
                </em><br/>
                债务人主体:<?php echo \common\models\creditorProduct::$obligor[isset($v['obligor'])?$v['obligor']:''];?><br/>
                委托事项:<?php echo \common\models\creditorProduct::$commitment[isset($v['commitment'])?$v['commitment']:''];?><br/>
                委托期限:<?php echo \common\models\creditorProduct::$commissionperiod[isset($v['commissionperiod'])?$v['commissionperiod']:''];?>月<br/>
                代理费用:<?php if($v['category'] == 2){ ?>
				              <?php if(isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==1){ ?> (1) 服务佣金：<?php echo isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==1?$v['agencycommission']:''?>% <?php }else{ ?> (2)固定费用：<?php echo isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==2?$v['agencycommission']:''?>万<?php } ?>
				         <?php }else{ ?>
						      <?php if(isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==1){ ?> (1) 固定：<?php echo isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==1?$v['agencycommission']:''?>万 <?php }else{ ?> (2)风险费率：<?php echo isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==2?$v['agencycommission']:''?>%<?php } ?>
						 <?php } ?><br/>
            </p>
        <?php endforeach;?>
    </div>    <!-- 处置方详情 -->
    <!-- 结案开始 -->
    <div class="affirm">
        <a href="#" onclick="applys('<?php echo $v['id']?>','<?php echo $v['category']?>')">申请</a>
    </div>
</div>
<script type="text/javascript">
    function applys(id,cate){
        var save_url = '';
        if(cate == 1){
            save_url = "<?php echo Url::toRoute('/user/save_app')?>";
        }else if(cate == 2 || cate == 3){
            save_url = "<?php echo Url::toRoute('/user/save_coll')?>";
        }else{
            save_url = FALSE;
        }
        $.post(save_url,{id:id,cate:cate},function(v){
            if(v == 1){
                alert('请不要重复申请');
                location.href = "<?php echo Url::toRoute('/order/order_save')?>";

            }else if(v == 2){
                alert('已发出申请');
                location.href = "<?php echo Url::toRoute('/order/order_apply')?>";
            }else{
                alert('申请失败');
            }
        },'json');
    }

</script>