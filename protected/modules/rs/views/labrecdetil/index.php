<?php
$this->breadcrumbs = array(
	'Labrecdetils',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Labrecdetil', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Labrecdetil', 'url' => array('admin')),
);
?>

<h1>Labrecdetils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 