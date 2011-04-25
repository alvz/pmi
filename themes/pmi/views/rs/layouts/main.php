<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
        <? include'head.php' ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
        <div class="header_wrap clearfix">
	<div class="header">
    	<div class="logo"><a href="index.php"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="logo" /></a></div>
        <div class="help fr"><a href="#" class="button rad">Panduan <img src="images/help.png" alt="hrlp" align="absmiddle" /></a></div>

        <div class="search fr"><input name="" type="text" class="search_input" /><input name="" type="submit" class="search_button" value=""/></div>
        <div class="welcome fr">Welcome<a href="#"> <strong>Irwan Dharmawan</strong></a></div>
        
        </div>
            
        </div>

    <div class="content_frame">
        <div id="mainmenu">
            <?php $this->widget('zii.widgets.CMenu',array(
                        'id' => 'menu',
                        'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Contact', 'url'=>array('/site/contact'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                        ),
                    )); ?>
            </div>
    <div class="content">
    <?php include 'menu.php' ?>
        
	<?php echo $content; ?>
        
        <div class="clear"></div>

</div>
    <div class="footer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_logo.png" alt="logo" width="369" /></div>
</div>
</body>
</html>