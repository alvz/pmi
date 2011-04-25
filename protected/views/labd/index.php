<?php
$this->breadcrumbs = array(
	'Labds',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Labd', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Labd', 'url' => array('admin')),
);
?>

<h1>Labds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 