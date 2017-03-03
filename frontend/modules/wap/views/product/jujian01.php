<?php 
$jiafang = isset($data['agreementApply']['certification'])?$data['agreementApply']['certification']['name']:($data['agreementApply']['createuser']['realname']?$data['agreementApply']['createuser']['realname']:$data['agreementApply']['createuser']['username']);
$xieyibianhao ="QS".$data['number'];
$cardNo = $data['agreementApply']['certification']['cardno'];
$email = $data['agreementApply']['certification']['email'];
$time = $data['agreementApply']['orders']['create_at']?:time();

// var_dump($data);

?>
<style>
.text{width:100%;font-size:18px;text-indent:40px;line-height:30px;}
</style>
<h3 style="width:100%;text-align:center;">居间服务协议——清收人</h3>
<p style="width:100%;font-size:18px;"> 协议编号：<u>&nbsp;&nbsp;<?=$xieyibianhao?>&nbsp;&nbsp;</u></p>
<p style="width:100%;font-size:18px;">甲方：<u>&nbsp;&nbsp;<?=$jiafang?>&nbsp;&nbsp;</u></p>
<p style="width:100%;font-size:18px;">身份证号/营业执照号：<u>&nbsp;&nbsp;<?=$cardNo?>&nbsp;&nbsp;</u></p>
<p style="width:100%;font-size:18px;"> 联系邮箱：<u>&nbsp;&nbsp;<?=$email?>&nbsp;&nbsp;</u></p>
<p style="width:100%;font-size:18px;"> 乙方 : 直向资产管理有限公司</p>
<p style="width:100%;font-size:18px;"> 联系邮箱 : service@direct-invest.com.cn</p>

<p style="width:100%;font-size:18px;text-indent:40px;margin-top:40px;">鉴于甲方作为合法债权人或合法债权人的受托人欲寻找清收公司或自然人（以下简称“清收人”）为其提供清收服务。乙方作为居间方接受甲方委托为其推荐清收公司供选择。根据《中华人民共和国合同法》的有关规定，本着自愿、平等、互利、诚实信用的原则，现双方经过友好协商，达成一致协议如下：</p>
<p class="text">一、居间服务内容：</p>
<p class="text">1.乙方通过自身及其运营的清道夫平台清道夫债管家（www.zcb2016.com）或APP应用软件（以下简称“清道夫平台”或“平台“）为甲方推荐适合的清收人,促成甲方与清收人形成委托关系。当甲方与清收人签署委托清收合同时即表示乙方完成本协议约定的居间服务，甲方应按照本协议约定向乙方支付居间服务费。</p>
<p class="text">2. 乙方仅按照本协议约定提供居间服务，平台信息服务，不对甲方和清收人在委托清收过程中的任何事项做任何保证、担保以及承诺。甲方和清收人在委托清收过程中出现的任何纠纷均由其双方自行解决，与乙方无关。</p>
<p class="text">二、居间服务方式：</p>
<p class="text">1. 甲方作为债权人或代理人按照清道夫平台上的要求注册成为用户，并提供真实姓名/名称、证件号码、住所、联系人、联系电话以及联系方式等资料信息。清道夫平台为甲方推荐在服务平台上已注册的清收人。</p>
<p class="text">2. 甲方根据自身需要从清道夫平台上选择清收人与其达成委托清收合意并签订委托清收合同等。</p>
<p class="text">3. 乙方仅对清道夫平台上注册清收人的信息做形式审查，对该等信息的真实性、准确性、及时性、完整性不做任何承诺与保证，乙方须自行判断与选择。</p>
<?php /*<p class="text">三、委托期限</p>
<p class="text">甲方委托乙方提供居间服务的期间自<u>&nbsp;&nbsp;</u> 年<u>&nbsp;&nbsp;</u> 月<u>&nbsp;&nbsp;</u> 日起至<u>&nbsp;&nbsp;</u> 年<u>&nbsp;&nbsp;</u> 月<u>&nbsp;&nbsp;</u> 日止</p>
*/?>
<p class="text">三、委托清收合同金额的确定方式与居间服务费用结算</p>
<p class="text">乙方通过清道夫平台为甲方提供居间服务，甲方应向乙方支付居间服务费。  </p>
<p class="text">居间服务费的收取方式如下：</p>
<p class="text">1.甲方通过乙方的居间服务与清收人达成委托清收意向并签订委托清收合同之日起3日内，甲方应通过更新其清道夫平台资料信息的方式提交给乙方备案。甲方应在其与清收人签署委托清收合同之日将居间服务费¥ 0支付给乙方。</p>
<p class="text">2.居间服务费收取的优惠方式和期限可参见乙方服务平台制定的规则与公告，该等规则与公告会不定时更新，乙方对服务费收取的优惠方式享有自主决定权。</p>
<p class="text"><p style="width:100%;font-size:18px;text-indent:40px;line-height:30px;">乙方收取居间服务费用的银行账号如下:</p>
<p class="text">户名： 直向资产管理有限公司</p>
<p class="text">账户号：8110 2010 1400 0176 307</p>
<p class="text">开户行：中信银行 上海浦东分行</p>
<p class="text">五、甲乙双方权利义务</p>
<p class="text">1.甲方保证具有签订和履行本合同所必须的民事权利和行为能力的自然人或法人并拥有合法债权，可独立承担民事责任。</p>
<p class="text">2.甲方自行对清收人的相关信息资料进行核实。</p>
<p class="text">3.甲方通过清道夫平台自行选定清收人后应及时与其签订相关委托清收合同并通过更新其清道夫平台资料信息的方式告知乙方。</p>
<p class="text">4.甲方对乙方推荐的清收人具有自主选择权。</p>
<p class="text">5.甲方与乙方推荐的清收人不得以任何理由或形式私下签署委托清收合同形成委托关系。如若出现上述行为，仍视为乙方已完成本协议约定居间服务，乙方有权取得约定的全部居间服务费。同时，甲方应向支付乙方数额等同于其向清收人收取的清收服务费的违约金。</p>
<p class="text">6.甲方一旦通过清道夫平台选择了合适的清收人，应在签订委托清收合同之日起5日内根据清道夫平台的规则完善清收委托相关信息资料，并保证其真实性、有效性、及时性、完整性，否则视为甲方违约，甲方应承担因此产生的所有责任，包括但不限于给乙方造成的居间服务费损失。</p>
<p class="text">7.甲方通过清道夫平台获得清收人信息后，不得以任何理由或形式将该等信息披露给予第三方机构或个人。否则，甲方应向乙方支付数额等同于本协议约定居间服务费的违约金。</p>
<p class="text">8.甲方应遵守清道夫平台的各项规则，包括本协议签署时已经存在的或日后修订或日后新增的规则，并同意按照平台的规则接受相应的处罚。</p>
<p class="text">六、违约条款</p>
<p class="text">1.甲乙双方均应履行本协议所约定的义务，任何一方不履行、不完全或不适当履行即构成违约，违约方应对由此给守约方造成的一切损失承担经济和法律责任。</p>
<p class="text">2.如果甲方未能按照本协议的约定按时足额向乙方支付居间服务费，应就欠付款项按照每日千分之一的比例向乙方支付违约金，违约金自应付款之日起计算至款项实际支付之日止。</p>
<p class="text">3.甲乙双方变更本协议项下银行账户信息的，应在变更之日起三日内以书面方式告知另一方，如因一方未及时通知导致无法按期收款的，不视为另一方违约，因此造成的损失由怠于通知方自行承担。</p>
<p class="text">4.任何一方对对方违约行为的任何宽限，均不应视为放弃向违约方的追究及索赔，也不应视为对违约方行为的认可。</p>
<p class="text">七、不可抗力</p>
<p class="text">1、“不可抗力”是指甲乙双方不能合理控制、不可预见或即使预见亦无法避免的事件，该事件妨碍、影响或延误任何一方根据协议履行其全部或部分义务。该事件包括但不限于政府行为、自然灾害、战争、电信部门技术性调整、黑客攻击、软件中毒或任何其它类似事件。</p>
<p class="text">2、出现不可抗力事件时，受影响方应及时、充分地以书面方式通知对方，并告知对方该类事件对本协议可能产生的影响，并应当在合理期限（不可抗力事件发生后30日）内提供该等事件的详细信息及由有关组织出具的解释受影响方因此无法履行全部或部分本协议项下义务的相关证明。确属不可抗力情形的，则本协议的履行时间应予以延期，双方均不对因延误造成的损失承担责任。</p>
<p class="text">八、协议变更和解除</p>
<p class="text">1、甲乙双方经协商同意，可以变更或者解除本协议。</p>
<p class="text">2、甲乙双方协商一致变更本协议相关条款的，应以书面补充协议方式进行变更。</p>
<p class="text">3、以下情形甲方或乙方有权单方解除本协议。</p>
<p class="text">一方违约，守约方要求违约方在5日内予以改正或采取相应补救措施，若在该期限内违约方未予改正或采取相应补救措施，守约方有权以书面方式通知对方解除本协议，并要求赔偿相关损失。</p>
<p class="text"> 九、通知和送达</p>
<p class="text">1.甲、乙双方因履行本合同而发出或者提供的所有通知、文件、材料，均以本合同所列明的地址、电子邮箱、传真送达。一方迁址或者变更邮箱、传真电话的，应当在变更之日起3日内及时通知对方。</p>
<p class="text">2.以当面交付文件方式送达的，交付之时视为送达；以电子邮件方式送达的，发出电子邮件时视为送达；以传真方式送达的，发出传真时视为送达；以邮寄方式送达的，邮件交邮当日视为送达。</p>
<p class="text">十、保密条款</p>
<p class="text">1.甲、乙双方均应对本协议项下合作内容及从对方获得的数据、资料、客户信息及其它信息依法负有保密义务，未经对方书面同意，任何一方在任何情况下均不得提供、透露给任何第三人，亦不得将前述的数据、资料及其他信息用于本协议以外的任何用途。如有违约情形由违约方承担由此造成的一切损失。</p>
<p class="text">2.对于以下信息，双方均免除相应的保密责任：由公众通过合法途径获知的信息;从第三方获知的，并未违反任何保密责任的信息；根据中国法律法规、规章规定，或司法、行政、金融监管部门要求透露的信息。</p>
<p class="text">3.本条规定的保密义务具有永久法律效力，不因本协议的变更、解除或终止而终止。</p>
<p class="text">十一、争议处理。</p>
<p class="text"> 因本协议履行而产生的任何纠纷，甲乙双方应友好协商解决。如协商不成，任何一方均有权向乙方所在地人民法院提起诉讼。</p>
<p class="text">十二、电子合同的效力</p>
<p class="text">1.本协议通过乙方所有的清道夫债管家网站（网络域名www.zcb2016.com）以电子文本形式制作，可以生成一份或者多份，且每一份具有同等法律效力；同时甲方委托乙方代为保管并保存在乙方为此设立的专用服务器上备查，各方均认可该形式协议的效力。</p>
<p class="text">2.本协议的电子签署方式为双方按照清道夫平台上要求的签署步骤，在对合同内容完全理解且对条款无任何争议的情况下自愿签署，一经完成网站上的签署确认即本合同签署完成，立即发生法律效力。</p>
<p class="text">3. 清道夫平台的各项规则和协议，包括本协议签署时已经存在的或日后修订的或日后新增的规则和协议均为本合同组成部分，对双方均有约束力，双方均应受之约束。</p>
<p class="text">（以下无正文，为签署页）</p>
<p class="text">甲&nbsp;&nbsp;&nbsp;&nbsp;方： <u>&nbsp;&nbsp;<?=$jiafang?>&nbsp;&nbsp;</u>  乙&nbsp;&nbsp;&nbsp;&nbsp;方： 直向资产管理有限公司  
<p class="text">甲方代理人：<u>&nbsp;&nbsp;<?=$jiafang?>&nbsp;&nbsp;</u> 身份证号： <u>&nbsp;&nbsp;<?=$cardNo?>&nbsp;&nbsp;</u> 
<p class="text">本合同签约日期：<u>&nbsp;<?= date('Y',$time) ?>&nbsp;</u> 年 <u>&nbsp;<?= date('m',$time) ?>&nbsp;</u>月<u>&nbsp;<?= date('d',$time) ?>&nbsp;</u> 日
