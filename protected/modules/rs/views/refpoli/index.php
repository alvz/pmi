<?php
$this->breadcrumbs = array(
	'Refpolis',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refpoli', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refpoli', 'url' => array('admin')),
);
?>

<h1>Refpolis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 