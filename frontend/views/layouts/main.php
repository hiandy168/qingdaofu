<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
$title = $this->title?$this->title:$this->context->title;
$title=$title?$title:Yii::$app->name;

// AppAsset::register($this);
Yii::$app->view->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($title) ?></title>
    <meta content="<?= Html::encode($this->context->keywords) ?>" name="keywords">
    <link rel="shortcut icon" type="image/ico" href="/images/favicon.png"/>
    <meta content="<?= Html::encode($this->context->description) ?>" name="description"> 
    <?php echo $this->registerCssFile('/bate2.0/css/index.css');?> 
    <?php echo $this->registerCssFile('/bate2.0/css/center.css');?> 
	<?php echo $this->registerCssFile('/js/msgbox/jquery.msgbox.css');?>
    <?php echo $this->registerJsFile('/js/jquery-1.11.1.js',['position'=>\Yii\Web\View::POS_HEAD]);?>
    <?php echo $this->registerJsFile('/js/layer/layer.js',['position'=>\Yii\Web\View::POS_HEAD]);?> 
	<?php echo $this->registerJsFile('/bate2.0/js/divscroll.js',['position'=>\Yii\Web\View::POS_HEAD]);?>
	<?php echo $this->registerJsFile('/js/msgbox/jquery.msgbox.js',['position'=>\Yii\Web\View::POS_HEAD]);?>
	<?php echo $this->registerJsFile('/js/jquery.tmpl.min.js',['position'=>\Yii\Web\View::POS_HEAD]);?>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<?php echo $this->render('header')?> 
<div class="cont">
 <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    <?php echo $content;?> 
</div>
<?php 
if(isset($this->context->footer)){
	if($this->context->footer){
		echo $this->render($this->context->footer);
	}
}else{
	echo $this->render('footer');
}
 
 
 
 ?>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
