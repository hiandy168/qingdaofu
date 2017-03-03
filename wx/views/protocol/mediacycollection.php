<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use wx\widget\wxHeaderWidget;
?>
<style>
p{font-weight:normal;line-height:24px;}
.wt_xieyi{width:100%;max-width:600px;margin:auto;}
</style>
<div class="wt_xieyi">
    <p style="font-size:16px;font-weight:bold;text-align:center;"><b>协议编号：<b class="b1"><?= $data['number']?></b></b></p>
    <div class="wtr jujian">
        <p>甲方： <b class="b1"><?= isset($data['agreementApply']['certification'])?$data['agreementApply']['certification']['name']:($data['agreementApply']['createuser']['realname']?$data['agreementApply']['createuser']['realname']:$data['agreementApply']['createuser']['username'])?></b></p>
        <p>证件号码（身份证号/营业执照号）： <b class="b1"><?= $data['agreementApply']['certification']['cardno']?></b></p>
        <p>联系邮箱： <b class="b1"><?= $data['agreementApply']['certification']['email'] ?></b></p>
    </div>
    <div class="wtr1 jujian">
        <p>乙方 : <b style="border-bottom:1px solid #ccc;">直向资产管理有限公司 </b></p>
        <p>联系邮箱 : <b class="b1">service@direct-invest.com.cn</b></p>
    </div></br>
    <p style="text-indent:20px;">
       鉴于甲方系在中华人民共和国境内成立的清收公司；乙方作为提供中介服务的居间平台同意接受甲方委托为其提供有清收需求公司或个人。根据《中华人民共和国合同法》的有关规定，本着自愿、平等、互利、诚实信用的原则，现双方经过友好协商，达成一致协议如下：</p></br>

    <p><h4>一、居间服务内容：</h4></p></br>
    <p style="text-indent:20px;">1.乙方通过自身及其所有的服务平台为甲方提供有清收需求的公司或个人,促成甲方与有清收需求的公司或个人形成委托关系。当甲方与有清收需求的公司或个人签署委托代理合同时即表示乙方完成本协议约定的居间服务，甲方按照本协议约定向乙方支付居间服务费。</p>
    <p style="text-indent:20px;">2. 乙方仅按照本协议约定提供居间服务，公示服务平台用户注册信息，不对甲方和有清收需求的公司或个人之间的委托代理提供针对任何一方的保证、担保以及任何承诺。甲方和有清收需求的公司或个人之间关于委托代理合同的任何纠纷均由其双方自行解决，与乙方无关。</p></br>
    <p><h4>二、居间服务方式：</h4></p></br>
    <p style="text-indent:20px;">1. 甲方作为清收公司通过乙方所有的清道夫债管家网络服务平台（网络域名www.zcb2016.com)或APP应用软件上按要求注册成为用户，并提供真实企业名称、法定代表人、住所、联系人、联系电话以及联系方式。乙方通过其所有的清道夫债管家网络服务平台为甲方推送在服务平台上已注册的有清收需求的公司或个人用户。</p>
    <p style="text-indent:20px;">2. 甲方根据自身需要从乙方推送的用户中选择有清收需求的公司或个人并与其签订清收委托代理合同。</p>
    <p style="text-indent:20px;">3. 乙方仅对服务平台上提供给甲方的有清收需求的公司或个人用户信息做形式审查，乙方对提供给甲方用户信息的真实性不承担任何责任。</p></br>
    <p> <h4>三、委托期限</h4></p></br>
    <p class="jia">甲方委托乙方提供居间服务的期间自<b class="b1 fw"><?= date('Y',$data['agreementApply']['create_at']);?></b>年<b class="b1 fw"><?= date('m',$data['agreementApply']['create_at']);?></b>月<b class="b1 fw"><?= date('d',$data['agreementApply']['create_at']);?></b>日至<b class="b1 fw"><?= date('Y',strtotime("+".$data['overdue']."months"));?></b>年<b class="b1 fw"><?= date('m',strtotime("+".$data['overdue']."months"));?></b>月<b class="b1 fw"><?= date('d',strtotime("+".$data['overdue']."months"));?></b>日。</p></br>
    <p><h4>四、委托代理合同金额的确定方式与居间服务费用结算</h4></p></br>
    <p>乙方通过网络服务平台为甲方提供居间服务，甲方应向乙方支付居间服务费。
        居间服务费的收取方式如下：</p>
    <p style="text-indent:20px;">1.甲方通过乙方网络服务平台的居间服务与有清收需求的公司或个人用户达成委托代理的初步意向并相互取得联系方式。双方初步确定委托代理合同的标的金额为人民币<b class="b1 fw"><?= $data['account']?round($data['account']/10000):''?>万元</b>。</p>
    <p style="text-indent:20px;">2. 甲方通过乙方网络服务平台的居间服务与有清收需求的公司或个人用户达成初步意向后的十个工作日内双方应协商签订相关委托代理合同并确定最终委托代理合同的标的金额。甲方应按为乙方居间服务推荐的有清收需求的公司或个人实际收回债权金额的 <b class="b1 fw">1</b>％作为居间服务费支付给乙方。支付时间：有清收需求的公司或个人实际收回债权后的当日一次性支付。</p>
    <p style="text-indent:20px;">3.居间服务费收取的优惠方式和期限可参见乙方服务平台制定的条件与公告，乙方对优惠的收取方式享有决定权。</p>
    <p style="font-size:14px;font-weight:bold;">乙方收取居间服务费用的银行账号如下:</p>
    <p><b style="border-bottom:1px solid #ccc;">户名：  直向资产管理有限公司</b> </p>
    <p><b style="border-bottom:1px solid #ccc;">账户号：8110 2010 1400 0176 307</b></p>
    <p><b style="border-bottom:1px solid #ccc;">开户行：中信银行 上海浦东分行</b></p></br>

    <p><h4>五、甲乙双方权利义务</h4></p></br>
    <p style="text-indent:20px;">1.甲方保证是中华人民共和国境内依法成立的清收公司，甲方对开展的清收业务保证其合法性。清收公司及其受托人若采取非法方式清收的，由此产生的全部责任由甲方承担。且一经乙方知悉，乙方有权要求甲方在服务平台上注销或者自行注销甲方。</p>
    <p style="text-indent:20px;">2.甲方自行对乙方及其服务平台推荐的有清收需求的公司或个人的相关信息资料进行核实，乙方应配合甲方开展相应业务。</p>
    <p style="text-indent:20px;">3.甲方通过乙方及其服务平台选定有清收需求的公司或个人后应及时与其签订相关委托代理合同并通过完善服务平台网站资料的方式告知乙方。</p>
    <p style="text-indent:20px;">4.甲方对乙方推荐的有清收需求的公司或个人具有完全的选择权，乙方不得干预甲方意愿。</p>
    <p style="text-indent:20px;">5.甲方与乙方推荐的有清收需求的公司与个人不得以任何理由或形式在居间活动中私下签署委托代理合同形成委托关系。如若出现上述行为，仍视为乙方已完成本协议约定居间服务，乙方有权取得全部约定的居间服务费。同时，甲方应按其与有清收需求的公司与个人签署的清收合同确定的收费方式为标准支付乙方违约金。</p>
    <p style="text-indent:20px;">6.甲方通过乙方及其服务平台的居间服务一旦选择合适的有清收需求的公司或个人，甲方应及时根据乙方平台的规则完善居间服务平台网站上的相关信息资料，保证居间服务资料的完整性。甲方应在签订清收协议后的七个工作日内完善相关居间服务平台网站上的信息资料，否则视为甲方违约，甲方由此承担可能给乙方造成的居间服务费损失。</p>
    <p style="text-indent:20px;">7.甲方通过乙方及其服务平台获得信息后，不得以任何理由或形式将有清收需求的公司或个人的信息资料披露给予第三方机构或个人。否则，甲方应按其与清收公司签署的委托代理合同收费金额支付乙方违约金。</p>
    <p style="text-indent:20px;">8. 凡经乙方推荐的有清收需求的公司或个人同时甲方也通过其他渠道取得该公司或个人信息的，此时为了秉持客观公证原则，甲方须以包括乙方在内的各渠道方向甲方推荐有清收需求的公司或个人信息的时间先后为依据来对该公司或个人的推荐方进行确认，以时间前者为准。</p>
    <p style="text-indent:20px;">9.甲方应遵守乙方平台系统中的各项规则，包括本协议签署时已经存在的或日后修订的或日后新增的规则，并同意按照平台系统的规则接受给予的处罚。</p>
    <p style="text-indent:20px;">10.乙方向甲方提供的有清收需求的公司与个人的资料完全基于相关人员自行填写，乙方不对资料的真实性负最终责任。</p>
    <p style="text-indent:20px;">11.乙方应认真完成甲方的委托事项，并为甲方与有清收需求的公司或个人签署合同提供联络、协助、撮合等服务。</p></br>
    <p><h4>六、违约条款</h4></p></br>
    <p style="text-indent:20px;">
        1.甲乙双方均应履行本协议所约定的义务，任何一方不履行或不完全适当履行即构成违约，违约方应对由此	给守约方造成的一切损失承担经济和法律责任。
        一方违约的，守约方有权以书面或电子邮件的方式要求违约方在【 5 】日内予以改正，若在该期限内违约方未予改正，守约方有权以书面或电子邮件的方式通知对方提前终止本协议，由此造成的相关经济损失由违约方承担。</p>
    <p style="text-indent:20px;">	2.如果甲方未能按照本协议的约定按时足额向乙方支付居间服务费，应就欠付款项按照每日千分之一的比例向对方支付违约金，违约金自应付款之日起计算至款项实际支付之日止。</p>
    <p style="text-indent:20px;">3.甲乙双方变更本协议项下银行账户信息的，应在变更之日起三日内以书面或电子邮件的方式告知另一方，如因一方未及时通知导致无法按期收款的，不视为另一方违约，因此造成的损失由怠于通知方自行承担。</p>
    <p style="text-indent:20px;">4.任何一方对对方违约行为的任何宽限，均不应视为放弃向违约方的追究及索赔，也不应视为对违约方行为的认可。</p></br>
    <p><h4>七、不可抗力</h4></p></br>
    <p style="text-indent:20px;">1、“不可抗力”是指甲乙双方不能合理控制、不可预见或即使预见亦无法避免的事件，该事件妨碍、影响或延误任何一方根据协议履行其全部或部分义务。该事件包括但不限于政府行为有清收需求的公司与个人自然灾害、战争、电信部门技术性调整、黑客攻击、软件中毒或任何其它类似事件。</p>
    <p style="text-indent:20px;">2、出现不可抗力事件时，受影响方应及时、充分地以书面或电子邮件的方式通知对方，并告知对方该类事件对本协议可能产生的影响，并应当在合理期限（不可抗力事件发生后 30 日）内提供该等事件的详细信息及由有关组织出具的解释受影响方因此无法履行全部或部分本协议项下义务的相关证明。确属不可抗力情形的，则本协议的履行时间应予以延期，双方均不对因延误造成的损失承担责任。</p></br>
    <p><h4>八、协议变更和解除</h4></p></br>
    <p style="text-indent:20px;">1、甲乙双方经协商同意，可以变更或者解除本协议。</p>
    <p style="text-indent:20px;">2、 甲乙双方协商一致变更本协议相关条款的，应以书面补充协议方式进行变更。</p>
    <p style="text-indent:20px;">3、以下情形甲方或乙方有权单方解除本协议：</p>
    <p>一方违约，守约方要求违约方在【 5 】日内予以改正，若在该期限内违约方未予改正，守约方有权以书面方式或电子邮件的方式通知对方解除本协议，并要求赔偿相关损失。</p></br>
    <p><h4>九、通知和送达</h4></p></br>
    <p style="text-indent:20px;">1.甲、乙双方因履行本合同而相互发出或者提供的所有通知、文件、材料，均以本合同所列明的地址、电子邮箱、传真送达。一方迁址或者变更邮箱、传真电话的，应当在变更之日起三日内及时通知对方。</p>
    <p>2.以当面交付文件方式送达的，交付之时视为送达；以电子邮件方式送达的，发出电子邮件时视为送达；以传真方式送达的，发出传真时视为送达；以邮寄方式送达的，邮件交邮当日视为送达。</p></br>
    <p><h4>十、保密条款</h4></p></br>
    <p style="text-indent:20px;">1.甲、乙双方均应对本协议项下合作内容及从对方获得的数据、资料、客户信息及其它信息依法负有保密义务，未经对方书面同意，任何一方在任何情况下均不得提供、透露给任何第三人，亦不得将前述的数据、资料及其他信息用于本协议以外的任何用途。如有违约情形由违约方承担由此造成的一切损失。</p>
    <p style="text-indent:20px;">2.对于以下信息，双方均免除相应的保密责任：由公众通过合法途径获知的信息；从第三方获知的，并未违反任何保密责任的信息；根据中国法律法规、规章规定，或司法、行政、金融监管部门要求透露的信息；</p>
    <p style="text-indent:20px;">3.本条规定的保密义务具有永久法律效力，不因本协议的变更、解除或终止而终止。</p></br>
    <p style="text-indent:20px;"><h4>十一、争议处理</h4></p></br>
    <p>因本协议履行而产生的任何纠纷，甲乙双方应友好协商解决。如协商不成，任何一方均有权向乙方注册地人民法院提起诉讼。</p></br>
    <p><h4>十二、电子合同的效力</h4></p></br>
    <p style="text-indent:20px;">1.本协议通过乙方所有的清道夫债管家网站（网络域名www.zcb2016.com）以电子文本形式制作，可以生成一份或者多份，且每一份具有同等效力；同时甲方委托乙方代为保管并永久保存在乙方为此设立的专用服务器上备查，各方均认可该形式协议的效力。</p>
    <p style="text-indent:20px;">2.本协议的电子签署方式为双方按照乙方所有的清道夫债管家网站（网络域名www.zcb2016.com）上要求的签署步骤，在对合同内容完全理解且对条款无任何争议的情况下自愿签署，一经完成网站上的签署确认即本合同签署完成，立即发生法律效力。</p>
    <p style="text-indent:20px;">3. 乙方平台系统中的各项规则和平台协议，包括本协议签署时已经存在的或日后修订的或日后新增的规则和协议均为本合同组成部分，对双方均有约束力，双方均应受之约束。</p>
    <p>（以下空白无正文） </p>
    <p class="clearfix"><span class="fl">甲方 : <b class="b1"><?= isset($data['agreementApply']['certification'])?$data['agreementApply']['certification']['name']:($data['agreementApply']['createuser']['realname']?$data['agreementApply']['createuser']['realname']:$data['agreementApply']['createuser']['username'])?></b></span>　　<span class="fr">乙方：直向资产管理有限公司</span></p>
    <p>  甲方代理人 : <b class="b1"><?= isset($data['agreementApply']['certification'])?$data['agreementApply']['certification']['name']:($data['agreementApply']['createuser']['realname']?$data['agreementApply']['createuser']['realname']:$data['agreementApply']['createuser']['username'])?></b></p>
    <p class="jia">本合同签订日期: <b class="b1"><?= date('Y',$data['agreementApply']['orders']['create_at']) ?></b>年<b class="b1"><?= date('m',$data['agreementApply']['orders']['create_at']) ?></b>月<b class="b1"><?= date('d',$data['agreementApply']['orders']['create_at']) ?></b>日</p>
</div>
