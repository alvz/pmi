<?PHP
$this->menuz = array(
		array('label'=>Yii::t('app', 'List') . ' Datregister',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Datregister',
		'url'=>array('create')),
	);
?>
<?php
/*
$this->breadcrumbs = array(
	'Datregisters' => array('index'),
	Yii::t('app', 'Manage'),
);
*/


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('datregister-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->pageTitle=Yii::app()->name . ' - RS';
$this->breadcrumbs=array(
	'RS',
);
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Datregisters</h1>

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
	'id' => 'datregister-grid',
	'dataProvider' => $model->search(),
	//'filter' => $model,
	'columns' => array(
		array(
			'name'=>'id',
			'type'=>'raw',
			'value'=>'CHtml::checkBox("id[]",false,array("value"=>"$data->id"))'
		),
                'id',
		'noreg',
		array(
				'name'=>'idmr',
				'value'=>'GxHtml::valueEx($data->idmr0)',
				'filter'=>GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)),
				),
		'tgl',
		array(
				'name'=>'jenis_tanggungan',
				'value'=>'GxHtml::valueEx($data->jenisTanggungan0)',
				'filter'=>GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)),
				),
		'no_rujuk',
		/*
		'ref_rujuk',
		'hak_kls_rwt',
		array(
				'name'=>'poli',
				'value'=>'GxHtml::valueEx($data->poli0)',
				'filter'=>GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)),
				),
		'nosjp',
		'biaya_admin',
		array(
				'name'=>'dokter',
				'value'=>'GxHtml::valueEx($data->dokter0)',
				'filter'=>GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)),
				),
		*/
            
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>

<?

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
	'id'=>'mydialog',
	// additional javascript options for the dialog plugin
	'options'=>array(
		'title'=>'Create Register',
                'width'=>'800px',
		'autoOpen'=>false,
		'modal'=>false,
	),
));
$model = new Datregister;


		if (isset($_POST['Datregister'])) {
			$model->attributes = $_POST['Datregister'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}
$this->renderPartial('create', array(
	'model' => $model,
));

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('open dialog', '#', array(
	'onclick'=>'$("#mydialog").dialog("open"); return false;',
));

$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
	'name'=>'test1',
	'value'=>'test21',
        'attribute'=>'nama',
	'source'=>$this->createUrl('autocompleteTest'),
	// additional javascript options for the autocomplete plugin
	'options'=>array(
        'delay'=>300,
        'minLength'=>2,
        'showAnim'=>'fold',
        'select'=>"js:function(event, ui) {
            $('#label').val(ui.item.label);
            $('#code').val(ui.item.id);
        }"
    ),
    'htmlOptions'=>array(
        'size'=>'40'
    ),
));

?>
These fields will be filled automatically after you select country.
<br />
<input id="label" type="text" style="width: 300px; margin-bottom: 5px" />
<br />
<input id="code" type="text" style="width: 300px; margin-bottom: 5px" />
<br />
<input id="call_code" type="text" style="width: 300px; margin-bottom: 5px" />
<br />

