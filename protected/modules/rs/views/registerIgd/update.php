<?php
$this->breadcrumbs = array(
	'Register Igds' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' RegisterIgd', 'url'=>array('index')),
    array('label' => Yii::t('app', 'Create') . ' RegisterIgd', 'url'=>array('create')),
    array('label' => Yii::t('app', 'View') . ' RegisterIgd', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
    array('label' => Yii::t('app', 'Keluar') . ' RegisterIgd', 'url'=>array('keluarIgd', 'id' => GxActiveRecord::extractPkValue($model, true))),
    array('label' => Yii::t('app', 'Manage') . ' RegisterIgd', 'url'=>array('admin')),
    array('label' => Yii::t('app', 'Create') . ' Ruang Rawat', 'url'=>array('datrrwt/create', 'idreg'=>$model->id)),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> RegisterIgd #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>
<?
$tindakanDataProvider=new CActiveDataProvider('Datrrwt', array(
            'criteria'=>array(
                'condition'=>'idreg='.$model->id,
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
//$tindakanDataProvider=new CActiveDataProvider('Dattindakan');

$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'datrrwt-grid',
	'dataProvider' => $tindakanDataProvider,
	'columns' => array(
                'id',
		'tglmasuk',
		'jammasuk',
		array(
				'name'=>'kamar',
				'value'=>'GxHtml::valueEx($data->kamar0)',
				'filter'=>GxHtml::listDataEx(Kamar::model()->findAllAttributes(null, true)),
				),
		'byhari',
		'tglklr',
                array(
                    'class'=>'CButtonColumn',
                    'buttons'=>array(
                        'update'=>array(
                            'url'=>'Yii::app()->createUrl("rs/datrrwt/update",array("id"=>$data->id))',
                        ),
                        'delete'=>array(
                            'url'=>'Yii::app()->createUrl("rs/datrrwt/delete",array("id"=>$data->id))',
                        ),
                    ),
                ),
	),
));

?>