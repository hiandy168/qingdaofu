<?php
use yii\widgets\LinkPager;
$category = ["2"=>"公司新闻","3"=>"财经资讯","4"=>"行业动态"];
?>
<div class="list_banner">
    <!-- <div class="banner_con">
        <p>清道夫债管家清道夫债管家清道夫债管家清道夫债管家清道夫债管家清道夫债管家</p>
    </div> -->

    <img src="/images/zc_list1.jpg" height="228" width="1920" alt="">
</div>

<div class="list_news">
    <div class="list_news_m">
        <div class="top2" style="position: relative;"><img src="/images/new.png" height="32" width="160" alt="" /><span style="position: absolute;top: 0;height: 32px;width: 120px;display: block;background: #0065B3;color: #fff;line-height: 32px;
    font-size: 20px;
    text-align: center;
    font-weight: bold;"><?=$label?></span></div>
        <?php foreach($news as $value):?>
        <div class="news clearfix">
            <ul class="date06">
                <li class="fir_li"><?php echo isset($value['create_time'])?date('Y-m-d',$value['create_time']):''?></li>
            </ul>
            <div class="myImg">
                <img src="/images/list_t.png" height="178" width="46" alt="" />
            </div>
            <ul class="date01">
                <li class="fir_li">
                    <p><a href="<?php echo \yii\helpers\Url::toRoute(['/homepage/newscontent/','cid' => $value['id']])?>"><?php echo isset($value['title'])?$value['title']:''?></a></p>
                    <div>
						<span>
							<?php echo $value->albumcontent?$value->albumcontent->introduce:''?>
						</span>
                    </div>
                </li>
            </ul>
        </div>
        <?php endforeach;?>
        <div class="fenye clearfix">
            <?= linkPager::widget([
                // 'firstPageLabel' => '首页',
                // 'lastPageLabel' => '最后一页',
                'prevPageLabel' => '上一页',
                'nextPageLabel' => '下一页',
                'pagination' => $provider->pagination,
                // 'maxButtonCount'=>4,
            ]);?>
        </div>
    </div>
</div>