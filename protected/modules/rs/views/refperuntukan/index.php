<?php
$this->breadcrumbs = array(
	'Refperuntukans',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refperuntukan', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refperuntukan', 'url' => array('admin')),
);
?>

<h1>Refperuntukans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 