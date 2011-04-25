<?php
$this->breadcrumbs = array(
	'Layanpolis',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Layanpoli', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Layanpoli', 'url' => array('admin')),
);
?>

<h1>Layanpolis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 