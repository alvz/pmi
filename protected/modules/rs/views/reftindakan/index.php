<?php
$this->breadcrumbs = array(
	'Reftindakans',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Reftindakan', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftindakan', 'url' => array('admin')),
);
?>

<h1>Reftindakans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 