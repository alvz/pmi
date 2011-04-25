<?php
$this->breadcrumbs = array(
	'Datsjps',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Datsjp', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Datsjp', 'url' => array('admin')),
);
?>

<h1>Datsjps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 