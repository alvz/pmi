<?php
$this->breadcrumbs = array(
	'Deposits' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Deposit',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Deposit',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('deposit-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Deposits</h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'deposit-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'tgldp',
		'nokwitansi',
		'nilai',
		array(
				'name'=>'via',
				'value'=>'GxHtml::valueEx($data->via0)',
				'filter'=>GxHtml::listDataEx(Refpembayaran::model()->findAllAttributes(null, true)),
				),
		'bank',
		/*
		'nokartu',
		'pcharge',
		'rpcharge',
		'jumlah',
		array(
				'name'=>'pasien',
				'value'=>'GxHtml::valueEx($data->pasien0)',
				'filter'=>GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)),
				),
		'uraian1',
		'uraian2',
		'atasnama',
		'penerima',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>