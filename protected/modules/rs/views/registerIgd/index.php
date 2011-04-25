<?php
$this->breadcrumbs = array(
	'Register Igds',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' RegisterIgd', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' RegisterIgd', 'url' => array('admin')),
);
?>

<h1>Register Igds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 