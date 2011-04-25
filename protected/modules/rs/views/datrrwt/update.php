<?php
$this->breadcrumbs = array(
	'Datrrwts' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Datrrwt', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Datrrwt', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Datrrwt', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Datrrwt', 'url'=>array('admin')),
        array('label' => Yii::t('app', 'Create') . ' Tindakan', 'url'=>array('tindakanIgd/create', 'idrwt'=>$model->id)),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Datrrwt #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>

<?php
$tindakanProvider=new CActiveDataProvider('TindakanIgd', array(
            'criteria'=>array(
                'condition'=>'idrwt='.$model->id,
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'tindakan-igd-grid',
	'dataProvider' => $tindakanProvider,	
	'columns' => array(
		'id',
		array(
				'name'=>'idreg',
				'value'=>'GxHtml::valueEx($data->idreg0)',
				'filter'=>GxHtml::listDataEx(RegisterIgd::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'kdtindakan',
				'value'=>'GxHtml::valueEx($data->kdtindakan0)',
				'filter'=>GxHtml::listDataEx(Dattarif::model()->findAllAttributes(null, true)),
				),
		'qty',
		'harga_satuan',
		'jns_bayar',
		array(
                    'class'=>'CButtonColumn',
                    'buttons'=>array(
                        'update'=>array(
                            'url'=>'Yii::app()->createUrl("rs/tindakanIgd/update",array("id"=>$data->id))',
                        ),
                        'delete'=>array(
                            'url'=>'Yii::app()->createUrl("rs/tindakanIgd/delete",array("id"=>$data->id))',
                        ),
                    ),
                ),
	),
)); ?>