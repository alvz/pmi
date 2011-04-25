<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PMI [+] Hospital Management System</title>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pmiplus.css" />
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ajaxtabs.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.accordion.js" type="text/javascript" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lib/jquery.easing.js"></script>
<script type="text/javascript">
	jQuery().ready(function(){
	jQuery('#navigation').accordion({
	autoheight: true,
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