<?php
$this->breadcrumbs = array(
	'Labrecs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Labrec', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Labrec', 'url' => array('admin')),
);
?>

<h1>Labrecs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 