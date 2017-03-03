
$(function(){
	/*左边菜单切换*/
	$(".menu_center ul li ol li").click(function(){
		$("ul li ol li.current").removeClass("current")
		$(this).addClass("current");
	});
	$('.js li').click(function(){
		
		$('.texts>li').eq($(this).index()).addClass('li1').siblings('li').removeClass('li1 li2');
		$('.js_m i').css('left',+$(this).index()*110+95+'px');

	})
	$('.hexin').click(function(){
		$('.js_m i').css('left','440px !important');
	})
	$("input:text").focus(function(){
            //让当前得到焦点的文本框改变其背景色
            //$(this).css("border","1px solid #ffad40");
            $('.login input').css('border','none')
        });
	$("input:text").blur(function(){
            //让当前失去焦点的文本框
            $(this).css("border","1px solid #bfbfbf");
            $('.login input').css('border','none')
            $('.tian2').css({'border-bottom':'1px solid #bfbfbf','border-top':'none', 'border-right':'none','border-left': 'none'})
        });

	//$('.sc').click(function(){
	//	$(this).toggleClass('sc1')
	//})
	$('.fix li').hover(function(){
		$(this).find('.fix01').removeClass('fix01');
		$(this).find('.fix02').addClass('fix01');
	},function(){
		$(this).find('.fix03').addClass('fix01');
		$(this).find('.fix02').removeClass('fix01');
	});
	
	/*固定费用解释切换*/
	$('.money i').hover(function() {
		$(this).siblings('span').css('display','block')
	},function(){
		$(this).siblings('span').css('display','none')
	});
	$('.card i').hover(function() {
		$(this).siblings('em').css('display','block')
	},function(){
		$(this).siblings('em').css('display','none')
	});
	$('.card i').hover(function() {
		$(this).siblings('b').css('display','block')
	},function(){
		$(this).siblings('b').css('display','none')
	});


	/*接单列表切换*/
	$('.title li').click(function(){
		var num=$('.jiedan table').index();
		$(this).addClass('.title current').siblings('.title li').removeClass('.title current')
		$('.jiedan table').eq($(this).index()).addClass('hide').siblings('table').removeClass('hide');
		
	})

	var num3=0;
	var boxWidth = 240;
	var allCount = $(".rec_details li.recom").size();
	var defaultShowNum = 5;
	var hideNum = allCount - defaultShowNum
	hideNum = hideNum>=0?hideNum:0;
	if(hideNum){
		$(".rec_details").css("width",(boxWidth*allCount)+"px")
	}
	
	$('.rec_r').click(function(){
		num3++;
		if(num3>hideNum){ num3=hideNum;return false}
		$('.rec_detail ul').stop().animate({'left':'-'+boxWidth*num3+'px'});
	})
	$('.rec_l').click(function(){
		num3--;
		if(num3<0){ num3=0;return false}
		$('.rec_detail ul').stop().animate({'left':'-'+boxWidth*num3+'px'})
	})
	/*消息已读 未读切换*/
	$('.info li').click(function(){
		$(this).addClass('current').siblings('.info li').removeClass('current');
	})
/*
$('.msgbox_title').delegate('.ty', 'click', function(event) {
	$('.wt_xieyi').parent('.msgbox_main').siblings('.msgbox_title_wrapper').
	find('.msgbox_title').addClass('float');
});*/
	


	/*基本补充消息切换*/
	/*$('.chosen').hide();
	$('.title_rz .base').click(function(){
		$('.bitian').show();
		$('.chosen').hide();
		$('.title_rz .base').addClass('current').siblings('span').removeClass('current')
	})
	$('.title_rz .supplement').click(function(){
		$('.chosen').show();
		$('.bitian').hide();
		$('.title_rz .supplement').addClass('current').siblings('span').removeClass('current')
	})*/


	$('.list_menu span').click(function(){
		var num=$(this).index()-1;
		$(this).addClass('current').siblings('span').removeClass('current');
		$(this).find('b').addClass('caret');
		
		$(this).siblings('span').find('b').removeClass('caret');
		$(this).find('b').css('left',num*130+135+'px');
	})


	/*地图展开*/
	$('.shangla').click(function(){
		$('.quyu').stop().slideToggle(1000);
		$(this).toggleClass('xiala')
	})

	$('.jt1').click(function(){
		$('#qy').stop().slideToggle().siblings('div').hide();
		$(this).toggleClass('arrow2');
	})
	$('.jt2').click(function(){
		$('#zclx').stop().slideToggle().siblings('div').hide();
		$(this).toggleClass('arrow2 arrow3');
	})
	$('.jt3').click(function(){
		$('#zcze').stop().slideToggle().siblings('div').hide();
		$(this).toggleClass('arrow2 arrow4');
	})
	$('#zclx span').click(function() {
		if ($(this).attr('id') == '0') {
			$('.category').html('资产类型');
		} else {
			$('.category').html($(this).html());
		}

		$('.category').attr('id', $(this).attr('id'));
		$('#zclx').stop().slideToggle().siblings('div').hide();
		searchMapForm();
	});

	$('#qy span').click(function() {
		if ($(this).attr('id') == '0') {
			$('.district').html('区域');
		} else {
			$('.district').html($(this).html());
		}

		$('.district').attr('id', $(this).attr('id'));
		$('#qy').stop().slideToggle().siblings('div').hide();
		searchMapForm();
	});

	$('#zcze span').click(function() {
		if ($(this).attr('id') == '0') {
			$('.money').html('资产金额');
		} else {
			$('.money').html($(this).html());
		}

		$('.money').attr('id', $(this).attr('id'));
		$('#zcze').stop().slideToggle().siblings('div').hide();
		searchMapForm();
	});

	$('.show').click(function(){
		$('.maps').toggleClass('none')
		/*$('.maps').slideToggle(fast)*/
		$('.show1').find('img').toggleClass('zk1');;
		$('.show1').find('b').toggleClass('zk');
	})


	/*产品与服务*/
	$('.serve a').hover(function(){
		var num=$(this).index()+1
		$(this).css('background','../images/p'+num+'.png');
		$(this).addClass('current').siblings().removeClass('current')

	}, function(){
		$('.serve .s_2').addClass('current')
		$(this).removeClass('current');
	})


	/*新手指引*/
	$('.guide .effect div').hide();
	$(window).scroll(function(){
		var num2=$(window).scrollTop();
		if(num2>1400){
			$('.guide3 .effect div').fadeIn(1000);
		}if(num2>900){
			$('.guide2 .effect div').fadeIn(1000);
		}if(num2>300){
			$('.guide1 .effect div').fadeIn(1000);
		}else{
			$('.guide .effect div').hide();
		}
	})
	/*点击回到顶部*/
	$(window).scrollTop(function(){
		$('.back').click(function(){
			$(window).scrollTop(0);
		})
	})


	/*合作伙伴点击按钮出现隐藏伙伴*/
	 		var ll = 0; 
            var timer=null;
        
   /* $('.huoban .right2').click(function(){
        
        ll++;
        if(ll>3){ll=3;}
        $('.huoban2 ul').animate({'left':'-'+ll*140+'px'})
    })
    $('.huoban .left2').click(function(){
        ll--;
        if(ll<0){ll=0;}
        $('.huoban2 ul').animate({'left':'-'+ll*140+'px'})
    })
*/

	var ni=$('.huoban2 ul li:last').index();
	var ni1=ni-6;
	$('.huoban2 ul li:first').clone().appendTo('.huoban2 ul');
    function lunbo() {
           ll++;
            if(ll>ni1)
            {ll=0;$('.huoban2 ul').css('left','0')}
            $('.huoban2 ul').stop().animate({'left':'-'+ll*163+'px'})  
        }
        timer=setInterval(lunbo,5000);
        
        $('.huoban2').hover(function(){
            clearInterval(timer);
            timer=null;
        },function(){
            clearInterval(timer);
            timer=setInterval(lunbo,5000);
        })

	/*导航下拉单*/
	/*$('.l_menu li').hover(function(event) {
		$(this).siblings('ol').stop().slideToggle('fast');
	});*/
	$('.l_menu li').hover(function() {
		/*$(this).addClass('current').siblings().removeClass('current');*/
		$(this).children('ol').stop().slideDown('fast');
	}, function() {
		/*$('.nav li').removeClass('current');*/
		$(this).children('ol').stop().slideUp('fast');
	});


	/* banner*/
	var nums=0;
	var timer1=null;
	/*$('.banners2 ul li:first').clone().appendTo('.banners2 ul');
	$('.banners2 ol li:first').clone().appendTo('.banners2 ol').hide();*/

	function lunbo1() {

		nums++;
		if(nums>3)
		{nums=0; /*$('.banners2 ul').css('left','0')*/}
		/*$('.banners2 ul').stop().animate({'left':'-'+nums*$('.banners2 li').width()+'px'})*/
		$(".banners2 ol li").eq(nums).addClass('current-b').siblings().removeClass();
		$(".banners2 ul li").eq(nums).stop().fadeIn('slow').siblings().stop().fadeOut('slow');
	}
	timer1=setInterval(lunbo1,5000);

	$('.banners2').hover(function(){
		clearInterval(timer1);
		timer1=null;
	},function(){
		clearInterval(timer1);
		timer1=setInterval(lunbo1,5000);
	});
	
	 // banner鼠标移动到ol里面的li，索引号对应的图片淡入进来，其他的图片淡出出去
    $('.banners2 ol li').mouseover(function(event) {
    	$(this).addClass('current-b').siblings().removeClass('current-b');
    	$('.banners2 ul li').eq($(this).index()).stop().fadeIn(200).siblings().stop().fadeOut(200);
    });
	$(".banners ul li").width($(".banners").width())
	$(".banners2 ol").css("margin-left",(0-$(".banners2 ol").width()/2))
	 $(window).resize(function(){
		$(".banners ul li").width($(".banners").width())
		$(".banners2 ol").css("margin-left",(0-$(".banners2 ol").width()/2))
	 })
    /*关闭悬浮框*/
    $('.xuanfu a').click(function(){
    	$('.xuanfu').css('display','none')
    })
    
    $('.login_l').click(function(){
        /*$('body').addClass('rgba')*/
        $('.rgba').show();
        
    })
    $('.close1').click(function(){
        $('.rgba').hide();
        /*$('body').removeClass('rgba')*/
    })
})



/*var $$ = function (id) {
	return document.getElementById(id);
}
window.onload = function () {
	var bSelect = $$("btn_select");
	var cSelect = bSelect.getElementsByTagName("span")[0];
	var oSelect = bSelect.getElementsByTagName("select")[0];
	var aOption = bSelect.getElementsByTagName("option");
	oSelect.onchange = function (){
		var text=oSelect.options[oSelect.selectedIndex].text;
		cSelect.innerHTML = text;
	}
}*/






