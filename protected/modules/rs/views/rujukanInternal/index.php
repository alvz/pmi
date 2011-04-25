<?php
$this->breadcrumbs = array(
	'Rujukan Internals',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' RujukanInternal', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' RujukanInternal', 'url' => array('admin')),
);
?>

<h1>Rujukan Internals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 