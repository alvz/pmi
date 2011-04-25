<?php
$this->breadcrumbs = array(
	'Rujukan Internals' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' RujukanInternal',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' RujukanInternal',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rujukan-internal-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Rujukan Internals</h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'rujukan-internal-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'idpasien',
				'value'=>'GxHtml::valueEx($data->idpasien0)',
				'filter'=>GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'idreg',
				'value'=>'GxHtml::valueEx($data->idreg0)',
				'filter'=>GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'jenis_tanggungan',
				'value'=>'GxHtml::valueEx($data->jenisTanggungan0)',
				'filter'=>GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'poli_pengirim',
				'value'=>'GxHtml::valueEx($data->poliPengirim0)',
				'filter'=>GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'dokter_pengirim',
				'value'=>'GxHtml::valueEx($data->dokterPengirim0)',
				'filter'=>GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)),
				),
		/*
		array(
				'name'=>'poli_tujuan',
				'value'=>'GxHtml::valueEx($data->poliTujuan0)',
				'filter'=>GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'dokter_tujuan',
				'value'=>'GxHtml::valueEx($data->dokterTujuan0)',
				'filter'=>GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)),
				),
		'asuransi',
		'no_rujuk',
		'catatan_khusus',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>