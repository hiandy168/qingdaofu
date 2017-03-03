<div class="details">
    <div class="look">
        <h3>查看信息</h3>
    </div>
    <!-- 融资详情 -->
    <div class="finance">
        <span class="bord_l">诉讼详情</span>
        <!-- <i></i> -->
        <?php foreach($credis as $v):?>
            <?php $value = unserialize($v['guaranteemethod']);
            $guar_other = $value['other'];
            unset($value['other']);
            ?>
            <?php $judicial = unserialize($v['judicialstatusA'])?>
            <p>
                借款本金: <span><?php echo isset($v['money'])?$v['money']:''?> 元</span><br/>
                借款期限:<span><?php echo isset($v['term'])?$v['term']:''?>月</span><br/>
                借款利率:<span><?php echo isset($v['rate'])?$v['rate']:''?>个月</span><br/>
                还款方式:<span><?php switch(isset($v['repaymethod'])?$v['repaymethod']:''){
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
                }?></span><br/>
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
                代理费用:<?php if(isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==1){ ?> (1) 固定：<?php echo isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==1?$v['agencycommission']:''?>万 <?php }else{ ?> (2)风险费率：<?php echo isset($v['agencycommissiontype'])&&$v['agencycommissiontype']==2?$v['agencycommission']:''?>%<?php } ?><br/>
              
            </p>
        <?php endforeach;?>
    </div>
    <!-- 处置方详情 -->
    <!-- 结案开始 -->
    <div class="affirm">
        <a href="#">申请</a>
    </div>
</div>
