<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />        

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php Yii::app()->clientScript->registerCoreScript('jquery');?>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.accordion.js" type="text/javascript" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lib/jquery.easing.js"></script>
        <script type="text/javascript">
	jQuery().ready(function(){
	jQuery('#navigation').accordion({
	autoheight: false,
        header: '.head',
        navigation: true,
        event: 'click',
        animated: 'easeslide',
	active: false,
	alwaysOpen: false
	});
		// bind to change event of select to control first and seconds accordion
		// similar to tab's plugin triggerTab(), without an extra method
		var accordions = jQuery('#list1a, #list1b, #list2, #list3, #navigation, #wizard');

		jQuery('#switch select').change(function() {
			accordions.accordion("activate", this.selectedIndex-1 );
		});
		jQuery('#close').click(function() {
			accordions.accordion("activate", -1);
		});
		jQuery('#switch2').change(function() {
			accordions.accordion("activate", this.value);
		});
		jQuery('#enable').click(function() {
			accordions.accordion("enable");
		});
		jQuery('#disable').click(function() {
			accordions.accordion("disable");
		});
		jQuery('#remove').click(function() {
			accordions.accordion("destroy");
			wizardButtons.unbind("click");
		});
	});
	</script>
</head>

<body>
<div id="boxLoading" class="hide">loading...</div>
<div class="header_wrap clearfix">
        <div id="header">
		
                <div class="logo"><a href="index.php"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="logo" /></a></div>
            <div class="help fr"><a href="#" class="button rad">Panduan <img src="images/help.png" alt="hrlp" align="absmiddle" /></a></div>

            <div class="search fr"><input name="" type="text" class="search_input" /><input name="" type="submit" class="search_button" value=""/></div>
            <div class="welcome fr">Welcome<a href="#"> <strong>Blue June</strong></a></div>
	
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'rs', 'url'=>array('/rs/default/index')),
                                array('label'=>'apotik', 'url'=>array('/apotik/default/index')),
                                array('label'=>Yii::t('app', 'Master Referensi') , 'url'=>array('/rs/refdati')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
        <div id="submenu">

            <?php
            $test = array(array('label'=>Yii::t('app', '?'),
			'url'=>array('index')));

            $this->menuz = array(
                    array('label'=>Yii::t('app', 'Kabupaten') , 'url'=>array('/rs/refdati')),
                    array('label'=>Yii::t('app', 'Kecamatan') , 'url'=>array('/rs/refkec')),
                    array('label'=>Yii::t('app', 'Kode Tambah') , 'url'=>array('/rs/refKodeTambah')),
                    array('label'=>Yii::t('app', 'Dokter') , 'url'=>array('/rs/refdokter')),
                    array('label'=>Yii::t('app', 'Poli') , 'url'=>array('/rs/refpoli')),
                    array('label'=>Yii::t('app', 'Tanggungan') , 'url'=>array('/rs/reftanggungan')),
                    array('label'=>Yii::t('app', 'Kategori Tindakan') , 'url'=>array('/rs/KategoriTindakan')),
                    array('label'=>Yii::t('app', 'Tindakan') , 'url'=>array('/rs/reftindakan')),
                    array('label'=>Yii::t('app', 'Type') , 'url'=>array('/rs/reftype')),
                    array('label'=>Yii::t('app', 'Tarif') , 'url'=>array('/rs/dattarif')),
                    array('label'=>Yii::t('app', 'Alsan Kelar') , 'url'=>array('/rs/refkeluar')),
                    array('label'=>Yii::t('app', 'Bayar Via') , 'url'=>array('/rs/refpembayaran')),
                    array('label'=>Yii::t('app', 'Kelas Rwt') , 'url'=>array('/rs/refkelasrawat')),
                    array('label'=>Yii::t('app', 'Ruang') , 'url'=>array('/rs/refruang')),
                array('label'=>Yii::t('app', 'Peruntukant') , 'url'=>array('/rs/refperuntukan')),
            );
            
            $this->menuz = array_merge($test, $this->menuz);
            $this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menuz,
			));
            ?>
        
        </div><!-- mainmenu -->
	

        </div><!-- header -->



</div>

<div class="container content_frame" id="page">

	<?php echo $content; ?>
    
	<div id="footer">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_logo.png" alt="logo" width="369" />
		
	</div><!-- footer -->

</div><!-- page -->
<script type="text/javascript">
/* <![CDATA[ */
    var baseUrl = '<?php echo Yii::app()->request->baseUrl ?>';
/*]]>*/
</script>

</body>
</html>