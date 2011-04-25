<?php
$this->breadcrumbs=array(
	$this->module->id,
);
$this->menuz = array(
		array('label'=>Yii::t('app', 'Master') . ' Referensi',
			'url'=>array('/rs/refdati')),
		array('label'=>Yii::t('app', 'Create') . ' Datregister',
		'url'=>array('/rs/datregister')),
	);

?>

<h1>rs</h1>
<h2><?php echo $this->uniqueId . '/' . $this->action->id; ?></h2>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>