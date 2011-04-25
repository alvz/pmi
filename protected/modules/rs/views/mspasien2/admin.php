<?php
$this->breadcrumbs = array(
	'Mspasien2s' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Mspasien2',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Mspasien2',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mspasien2-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#mspasien2-grid table tbody tr').live('click',function() {
	$.fn.yiiGridView.update('datregister-grid', {
		type:'POST',
                url:'?Datregister[idmr]='+$(this).children(':nth-child(1)').text(),		
	});        
        $.fn.yiiGridView.update('register-igd-grid', {
		type:'POST',
                url:'?RegisterIgd[idmr]='+$(this).children(':nth-child(1)').text(),
	});
	return false;
});
$('#mspasien2-grid a.update').live('click',function() {
	location.href='".$this->createUrl('/rs/mspasien2/update/id')."/'+$.fn.yiiGridView.getSelection(id);
	return false;
});
$('#mspasien2-grid a.view').live('click',function() {
	location.href='".$this->createUrl('/rs/mspasien2/view/id')."/'+$.fn.yiiGridView.getSelection(id);
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Rekam medik'); ?></h1>

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
	'id' => 'mspasien2-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'nomr',
		'nama',
		array(
				'name'=>'sex',
				'value'=>'GxHtml::valueEx($data->sex0)',
				'filter'=>GxHtml::listDataEx(Refsex::model()->findAllAttributes(null, true)),
				),
		'tempat_lahir',
		'tgl_lahir',
		/*
		'alamat',
		array(
				'name'=>'agama',
				'value'=>'GxHtml::valueEx($data->agama0)',
				'filter'=>GxHtml::listDataEx(Refagama::model()->findAllAttributes(null, true)),
				),
		'hp',
		'pekerjaan',
		'pendidikan',
		array(
				'name'=>'status',
				'value'=>'GxHtml::valueEx($data->status0)',
				'filter'=>GxHtml::listDataEx(Refstatusnikah::model()->findAllAttributes(null, true)),
				),
		'penanggung_jawab',
		'hub_dgn_pasien',
		array(
				'name'=>'dati',
				'value'=>'GxHtml::valueEx($data->dati0)',
				'filter'=>GxHtml::listDataEx(Refdati::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'kec',
				'value'=>'GxHtml::valueEx($data->kec0)',
				'filter'=>GxHtml::listDataEx(Refkec::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'tarif',
				'value'=>'GxHtml::valueEx($data->tarif0)',
				'filter'=>GxHtml::listDataEx(RefKodeTambah::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
<div id="tabs">
	<ul>
            <li><a href="#tabs-1">Rawat Jalan</a></li>
            <li><a href="#tabs-2">Rawat Inap</a></li>
	</ul>
	<div id="tabs-1">
            <?php $this->renderPartial('_grid', array(
                'model2' => $model2,
            )); ?>
        </div>
        <div id="tabs-2">
            <?php $this->renderPartial('_gridRi', array(
                'model3' => $model3,
            )); ?>
        </div>
</div>
<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
	});
</script>