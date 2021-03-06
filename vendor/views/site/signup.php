<?php
use \frontend\models\RegForm;
use yii\helpers\Html;
?>
<div class="banner">
    <span></span>
    <span class="ig01"></span>
    <span class="ig02"></span>
    <span class="ig03"></span>
    <span class="ig04"></span>
</div>
<?php $form = RegForm::begin(['id' => 'reg-form']);?>
    <div class="login">
        <span>注册</span>
        <hr/>
        <br>
        <div class="number">
            <?php echo Html::label('手机号码　','mobile',['style'=>'font-weight:normal;']);?>
            <?php echo Html::input('text','mobile',$model->mobile,['id'=>'mobile']);?>
            <br><?php echo Html::tag('i',' ',['style'=>'color:red;padding-left:84px;']);?>
        </div>
        <div class="gain">
            <?php echo Html::label('验证码　　','verifyCode',['style'=>'font-weight:normal;width:70px;text-align:right;']);?>
            <?php echo Html::input('text','verifyCode',$model->verifyCode,['id'=>'verifyCode']);?>
            <?php echo \yii\captcha\Captcha::widget(['name'=>'verifyCode1','captchaAction'=>'site/captcha','imageOptions'=>['id'=>'verifyCode1', 'title'=>'换一个', 'alt'=>'换一个', 'style'=>'cursor:pointer;width:65px; vertical-align:middle;'],'template'=>'{image}']);?>
            <br/><?php echo Html::tag('i','',['style'=>'display:inline-block;color:red;padding-left:84px;']);?>
        </div>
        <div class="gain">
            <?php echo Html::label('手机验证码','validateCode',['style'=>'font-weight:normal;width:70px;text-align:right;']);?>
            <?php echo Html::input('text','validateCode','');?>
            <?php echo Html::tag('a','获取',['class'=>'huoqu','style'=>'text-align:center']);?>
            <br/><?php echo Html::tag('i','',['style'=>'display:inline-block;color:red;padding-left:85px;']);?>
        </div>
        <div>
            <?php echo Html::label('密码　　　','passwordf',['style'=>'font-weight:normal;width:70px;text-align:right;']);?>
            <?php echo Html::input('password','passwordf','',['id'=>'passwordf','placeholder'=>'字母加数字不低于6位数','style'=>'color:#666;']);?>
            <br/><?php echo Html::tag('i','',['style'=>'display:inline-block;color:red;padding-left:85px;']);?>
        </div>
        <div>
            <?php echo Html::label('确认密码　','passwords',['style'=>'font-weight:normal;width:70px;text-align:right;']);?>
            <?php echo Html::input('password','passwords','');?>
            <br/><?php echo Html::tag('i','',['style'=>'display:inline-block;color:red;padding-left:85px;']);?>
        </div>
        <div>
            <?php echo Html::label('推荐人手机','tjmobile',['style'=>'font-weight:normal;width:70px;text-align:right;']);?>
            <?php echo Html::input('text','tjmobile','',['placeholder'=>'请输入推荐人平台登录手机号','style'=>'color:#666;']);?>
            <br/><?php echo Html::tag('i','',['style'=>'display:inline-block;color:red;padding-left:84px;']);?>
        </div>
        <div class="agree">
            <?php echo Html::input('checkbox','isAgree',1);?>
            <?php echo Html::tag('span','我已阅读并同意');?>
            <?php echo Html::tag('a','注册协议',['href'=>\yii\helpers\Url::to('/protocol/registerprotocal'),'target'=>'_blank']);?>
            <br/><?php echo Html::tag('i','',['style'=>'display:inline-block;color:red; margin-left: 10px;']);?>
        </div>
        <div class="login_l"><?php echo Html::tag('a','注册',['onclick'=>'RegSubForm()']);?></div>
    </div>
    <?php RegForm::end();?>
<script type="text/javascript">
    $(document).ready(function() {
        /*-------------------------------------------*/
        var InterValObj; //timer变量，控制时间
        var count = 60; //间隔函数，1秒执行
        var curCount;//当前剩余秒数
        $('.huoqu').click(function(){
            if($('input[name=mobile]').val()==''){alert('请填写手机号'); return false;}
            if($('input[name=verifyCode]').val()==''){alert('请填写验证码'); return false;}

            curCount = count;
            var mobile = $('#mobile').val();
            var verifyCode = $('#verifyCode').val();
            if(!(/^13\d{9}$/g.test(mobile))&&!(/^15\d{9}$/g.test(mobile))&&!(/^18\d{9}$/g.test(mobile))&&!(/^17\d{9}$/g.test(mobile))&&!(/^14\d{9}$/g.test(mobile))){
                alert('请输入格式正确的手机号');
                return;
            }
            //$('._msg').html('');
            var url = "/site/sms";
            __send(url,mobile,verifyCode);
        });

        function __send(url,mobile,verifyCode){
            $.ajax(
                {
                    dataType:'json',
                    type:'post',
                    url:url,
                    data:{mobile:mobile,verifyCode:verifyCode},
                    success:function(json){
                        if(json.code == '0000'){
                            //设置button效果，开始计时
                            //$('#dj_time').html("验证码已发送，请注意查收！");
                            $(".huoqu").attr("disabled","disabled");
                            $(".huoqu").addClass("huoqudisa");
                            //$('#dj_time').show();
                            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                            //$("#dj_time").html("请在" + curCount + "秒内输入验证码");
                        }else{
                            alert(json.msg);
                        }
                    },
                    error:function(){
                        alert('获取验证码失败，请刷新页面重新！');
                    }
                }
            );
        }

        //timer处理函数
        function SetRemainTime() {
            if (curCount == 0) {
                window.clearInterval(InterValObj);//停止计时器
                $(".huoqu").removeAttr("disabled");//启用按钮
                $(".huoqu").removeClass("huoqudisa");
                $(".huoqu").html('获取');
            }
            else {
                curCount--;
                $(".huoqu").html(curCount);
            }
        }
        $("#reg-form").validate({
            debug:false,
            focusCleanup:true,
            rules: {
                mobile: {
                    required:true,
                    remote:{
                        type:'post',
                        url:'<?php echo \yii\helpers\Url::to('/site/checkmobile')?>',
                        dataType: "json",
                        data:{mobile:function (){return $('#mobile').val()}}
                    }
                },
                validateCode: {
                    required: true
                },
                verifyCode: {
                    required: true
                },
                passwordf:{
                    required:true,
                    minlength:6
                },
                passwords:{
                    required:true,
                    minlength:6,
                    equalTo:'#passwordf'
                },
                isAgree: "required"
            },

            messages: {
                mobile: {
                    required:'请输入手机号',
                    remote:'该手机号已注册'
                },
                verifyCode: {
                    required: "请输入验证码"
                },
                validateCode: {
                    required: "请输入短信验证码"
                },
                passwordf:{
                    required:'请输入密码',
                    minlength:'最少位数为六'
                },
                passwords:{
                    required:'请再次输入密码',
                    minlength:'最少位数为六',
                    equalTo:'两次密码不一致'
                },
                isAgree:'请确认是否认同注册协议'

            },
            errorPlacement: function(error, element) {
                element.parent().children('i').html(error.html());
            },
            success: function (element) {
                element.parent().children('i').html('');
            }

        });
    });

    function RegSubForm(){
        $('#reg-form').submit();
    }
</script>