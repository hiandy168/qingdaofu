<div class="wt_xieyi">
    <h3>居间协议（融资人）</h3>
    <p style="margin-left:600px;font-size:16px;font-weight:bold;"><b>协议编号：<b class="b1"><?php echo isset($desc->code)?$desc->code:'';?></b></b></p>
    <div class="wtr jujian">
        <p>甲方： <b class="b1"><?php echo isset($certification->name)?$certification->name:'';?></b></p>
        <p>证件号码（身份证号/营业执照号）： <b class="b1"><?php echo isset($certification->cardno)?$certification->cardno:'';?></b></p>
        <p>联系邮箱： <b class="b1"><?php echo isset($certification->email)?$certification->email:'';?></b></p>
    </div>
    <div class="wtr1 jujian">
        <p>乙方 : <b style="border-bottom:1px solid #ccc;">直向资产管理有限公司 </b></p>
        <p>联系邮箱 : <b class="b1">service@direct-invest.com.cn</b></p>
    </div>
    <p>
        鉴于甲方作为借款人或借款人的指定受托人有资金需求欲寻找有意向的出借人，委托乙方寻找出借人。乙方作为居间方接受甲方委托为其提供出借人供选择。根据《中华人民共和国合同法》的有关规定，本着自愿、平等、互利、诚实信用的原则，现双方经过友好协商，达成一致协议如下：</p>

    <p><h4>一、居间服务内容：</h4></p>
    <p>1.乙方通过自身及其所有的服务平台为甲方提供有投资意向的出借人,促成甲方与出借人签订借款合同。当甲方与出借人签订借款合同时即表示乙方完成本协议约定的居间服务，甲方按照本协议约定向乙方支付居间服务费。</p>
    <p>2.乙方仅按照本协议约定提供居间服务，公示服务平台用户注册信息，不对甲方和出借人之间的借款活动提供任何借款和还款的保证、担保以及任何承诺。甲方和出借人之间关于借款合同的任何纠纷均由其双方自行解决，与乙方无关。</p>
    <p><h4>二、居间服务方式：</h4></p>
    <p>1. 甲方作为借款人或借款人指定受托人通过乙方所有的清道夫债管家网络服务平台（网络域名www.zcb2016.com)或APP应用软件上按要求注册成为用户，并提供真实身份信息（姓名、身份证号码、住所等）或法人信息（包括名称、法定代表人、住所等）、联系人、联系地址、联系电话等。乙方通过清道夫债管家网络服务平台为甲方推送在服务平台上已注册的有资金出借意向的出借人。</p>
    <p>2. 甲方根据自身需要从乙方推送的用户中选择出借人并与其签订借款协议。</p>
    <p>3. 乙方仅对服务平台上提供给甲方的用户做形式审查，乙方对提供给甲方的出借人信息的真实性不承担任何责任。</p>
    <p> <h4>三、委托期限</h4></p>
    <p class="jia">甲方委托乙方提供居间服务的期间自<b class="b1 fw"><?php echo isset($certification)?date('Y',$agree_time):'';?></b>年<b class="b1 fw"><?php echo isset($certification)?date('m',$agree_time):'';?></b>月<b class="b1 fw"><?php echo isset($certification)?date('d',$agree_time):'';?></b>日至<b class="b1 fw"><?php echo isset($certification)?date('Y',strtotime("+".$desc['commissionperiod']." months ",$agree_time)):'';?></b>年<b class="b1 fw"><?php echo isset($certification)?date('m',strtotime("+".$desc['commissionperiod']." months ",$agree_time)):'';?></b>月<b class="b1 fw"><?php echo isset($certification)?date('d',strtotime("+".$desc['commissionperiod']." months ",$agree_time)):'';?></b>日。</p>
    <p><h4>四、借款合同金额的确定方式与居间服务费用结算</h4></p>
    <p>乙方通过网络服务平台为甲方提供居间服务，甲方应向乙方支付居间服务费。居间服务费的收取方式如下：</p>
    <p>1.甲方通过乙方网络服务平台的居间服务与出借人用户达成借款的初步意向并相互取得联系方式。双方初步确定借款合同的标的金额为人民币<b class="b1 fw"><?php echo isset($desc->money)?$desc->money:''?>万元</b>，借款期限为<b class="b1 fw"><?php if(isset($desc->rate_cat)){if($desc->rate_cat == 1)echo $desc->term;elseif($desc->rate_cat == 2)echo 30*$desc->term;}?></b>天，借款月利率为<b class="b1 fw"><?php if(isset($desc->rate_cat)){if($desc->rate_cat == 1)echo 30*$desc->rate;elseif($desc->rate_cat == 2)echo $desc->rate;}?></b>%。</p>
    <p>2．甲方通过乙方网络服务平台的居间服务与出借人用户达成初步意向后的十个工作日内双方应协商签订借款合同并确定最终借款合同的标的金额。甲方与出借人签订借款合同之日应向乙方一次性支付居间服务费。居间服务费收取以甲方与出借人最终签订的借款合同约定的借款标的金额的 <b class="b1 fw">0</b>％收取.</p>
    <p>3.居间服务费收取的优惠方式和期限可参见乙方服务平台制定的条件与公告，乙方对优惠的收取方式享有决定权。</p>
    <p style="font-size:14px;font-weight:bold;">乙方收取居间服务费用的银行账号如下:</p>
    <p><b class="b1">户名：  直向资产管理有限公司</b> </p>
    <p><b class="b1">账户号：8110 2010 1400 0176 307</b></p>
    <p><b class="b1">开户行：中信银行 上海浦东分行</b></p>

    <p><h4>五、甲乙双方权利义务</h4></p>
    <p>1.甲方保证是中华人民共和国境内具有签订履行本协议所必须的民事权利和行为能力的法人或自然人，可独立承担民事责任。</p>
    <p>2.甲方对乙方及其服务平台推荐的出借人进行选择，乙方配合甲方开展相应业务。</p>
    <p>3.甲方通过乙方及其服务平台选定出借人后，应及时与出借人签订借款合同等相关协议并通过完善服务平台网站资料的方式告知乙方。</p>
    <p>4.甲方对出借人有完全的选择权，乙方不得干预甲方意愿。</p>
    <p>5.甲方接受乙方居间服务提供的出借人后，甲方应及时向乙方反馈甲乙双方达成协议，签署合同以及借款发放的相关情况。甲方应通过完善服务平台网站资料的方式告知乙方。</p>
    <p>6.甲方与乙方推荐的出借人不得以任何理由或形式在居间活动中私下签署委托借款合同。如若出现上述行为，仍视为乙方已完成本协议约定居间服务，乙方有权取得全部的居间服务费。同时，甲方应按其与出借人签署的借款合同金额的10%的标准支付乙方违约金。</p>
    <p>7.甲方通过乙方及其服务平台获得出借人信息后，不得以任何理由或形式将出借人的信息资料披露给予第三方机构或个人。一经发现，甲方按该笔借款的标的金额向乙方赔偿，并在三个自然日内完成赔偿款项的支付。</p>
    <p>8.凡经乙方推荐的出借人同时甲方也通过其他渠道取得该同一出借人的，此时为了秉持客观公证原则，甲方须以包括乙方在内的各渠道方向甲方推荐出借人信息的时间先后为依据来对该笔借款申请的推荐方进行确认，以时间前者为准。</p>
    <p>9.甲方通过乙方及其服务平台的居间服务一旦选择合适的出借人，甲方应及时根据乙方平台的规则完善居间服务平台网站上的相关信息资料，保证居间服务资料的完整性。甲方应在与出借人签订借款合同后的七个工作日内完善相关居间服务平台网站上的信息资料（包括不限于实际借款合同的金额，利率，借款期限等信息），否则视为甲方违约，甲方由此承担可能给乙方造成的居间服务费损失。</p>
    <p>10.甲方应遵守乙方平台系统中的各项规则，包括本协议签署时已经存在的或日后修订的或日后新增的规则，并同意按照平台系统的规则接受给予的处罚。</p>
    <p>11.乙方向甲方提供的出借人资料完全基于出借人或其代理人自行填写，乙方不对出借人的资料的真实性负最终责任。</p>
    <p><h4>六、违约条款</h4></p>
    <p>
        1.甲、乙双方均应履行本协议所约定的义务，任何一方不履行或不完全适当履行即构成违约，违约方应对由此给守约方造成的一切损失承担经济和法律责任。
        一方违约的，守约方有权以书面或电子邮件的方式要求违约方在【 5 】日内予以改正，若在该期限内违约方未予改正，守约方有权以书面或电子邮件的方式通知对方提前终止本协议，由此造成的相关经济损失由违约方承担</p>
    <p>	2.如果甲方未能按照本协议的约定按时足额向乙方支付居间服务费，应就欠付款项按照每日千分之一的比例向对方支付违约金，违约金自应付款之日起计算至款项实际支付之日止。</p>
    <p>3.甲乙双方变更本协议项下银行账户信息的，应在变更之日起三日内以书面或电子邮件的方式告知另一方，如因一方未及时通知导致无法按期收款的，不视为另一方违约，因此造成的损失由怠于通知方自行承担。</p>
    <p>4.任何一方对对方违约行为的任何宽限，均不应视为放弃向违约方的追究及索赔，也不应视为对违约方行为的认可。</p>
    <p><h4>七、不可抗力</h4></p>
    <p>1、“不可抗力”是指甲乙双方不能合理控制、不可预见或即使预见亦无法避免的事件，该事件妨碍、影响或延误任何一方根据协议履行其全部或部分义务。该事件包括但不限于政府行为与个人自然灾害、战争、电信部门技术性调整、黑客攻击、软件中毒或任何其它类似事件。</p>
    <p>2、出现不可抗力事件时，受影响方应及时、充分地以书面或电子邮件的方式通知对方，并告知对方该类事件对本协议可能产生的影响，并应当在合理期限（不可抗力事件发生后 30 日）内提供该等事件的详细信息及由有关组织出具的解释受影响方因此无法履行全部或部分本协议项下义务的相关证明。确属不可抗力情形的，则本协议的履行时间应予以延期，双方均不对因延误造成的损失承担责任。</p>
    <p><h4>八、协议变更和解除</h4></p>
    <p>1、甲乙双方经协商同意，可以变更或者解除本协议。</p>
    <p>2、 甲乙双方协商一致变更本协议相关条款的，应以书面补充协议方式进行变更。</p>
    <p>3、以下情形甲方或乙方有权单方解除本协议：</p>
    <p>一方违约，守约方要求违约方在【 5 】日内予以改正，若在该期限内违约方未予改正，守约方有权以书面方式或电子邮件的方式通知对方解除本协议，并要求赔偿相关损失。</p>
    <p><h4>九、通知和送达</h4></p>
    <p>1.甲、乙双方因履行本合同而相互发出或者提供的所有通知、文件、材料，均以本合同所列明的地址、电子邮箱、传真送达。一方迁址或者变更邮箱、传真电话的，应当在变更之日起三日内及时通知对方。</p>
    <p>2.以当面交付文件方式送达的，交付之时视为送达；以电子邮件方式送达的，发出电子邮件时视为送达；以传真方式送达的，发出传真时视为送达；以邮寄方式送达的，邮件交邮当日视为送达。</p>
    <p><h4>十、保密条款</h4></p>
    <p>1.甲、乙双方均应对本协议项下合作内容及从对方获得的数据、资料、客户信息及其它信息依法负有保密义务，未经对方书面同意，任何一方在任何情况下均不得提供、透露给任何第三人，亦不得将前述的数据、资料及其他信息用于本协议以外的任何用途。如有违约情形由违约方承担由此造成的一切损失。</p>
    <p>2.对于以下信息，双方均免除相应的保密责任：由公众通过合法途径获知的信息；从第三方获知的，并未违反任何保密责任的信息；根据中国法律法规、规章规定，或司法、行政、金融监管部门要求透露的信息；</p>
    <p>3.本条规定的保密义务具有永久法律效力，不因本协议的变更、解除或终止而终止。</p>
    <p><h4>十一、争议处理</h4></p>
    <p>因本协议履行而产生的任何纠纷，甲乙双方应友好协商解决。如协商不成，任何一方均有权向乙方注册地人民法院提起诉讼。</p>
    <p><h4>十二、电子合同的效力</h4></p>
    <p>1.本协议通过乙方所有的清道夫债管家网站（网络域名www.zcb2016.com）以电子文本形式制作，可以生成一份或者多份，且每一份具有同等效力；同时甲方委托乙方代为保管并永久保存在乙方为此设立的专用服务器上备查，各方均认可该形式协议的效力。</p>
    <p>2.本协议的电子签署方式为双方按照乙方所有的清道夫债管家网站（网络域名www.zcb2016.com）上要求的签署步骤，在对合同内容完全理解且对条款无任何争议的情况下自愿签署，一经完成网站上的签署确认即本合同签署完成，立即发生法律效力。</p>
    <p>3. 乙方平台系统中的各项规则和平台协议，包括本协议签署时已经存在的或日后修订的或日后新增的规则和协议均为本合同组成部分，对双方均有约束力，双方均应受之约束。</p>
    <p>（以下空白无正文） </p>
    <p class="clearfix"><span class="fl">甲方 :<?php echo isset($certification->name)?$certification->name:'';?></span><span class="fl">乙方：直向资产管理有限公司</span></p>
    <p>  甲方代理人 : <b class="b1"><?php echo isset($user->username)?$user->username:'';?></b></p>
    <p class="jia">本合同签订日期: <b class="b1"><?php echo isset($certification)?date('Y',$agree_time):'';?></b>年<b class="b1"><?php echo isset($certification)?date('m',$agree_time):'';?></b>月<b class="b1"><?php echo isset($certification)?date('d',$agree_time):'';?></b>日</p>
    <?php if(isset($desc->progress_status)&&$desc->progress_status == 1){?><p><input type="button" value="同　意" onclick="submitObj();"></p><?php }?>
    
</div>

<script type="text/javascript">
    function submitObj(){
        var url = "<?php echo \yii\helpers\Url::toRoute('/apply/determinefinancing')?>";
        $.post(url,{idlist:'<?php echo Yii::$app->request->get('idlist')?>'},function(v){
            if(v == 0){
                alert('请不要重复确认');
            }else if(v == 1){
                alert('已确认');
                window.close();
                window.opener.location.href="<?php echo \yii\helpers\Url::toRoute('/list/index')?>";
            }else{
                alert('提交失败');
            }
        });
    }
</script>