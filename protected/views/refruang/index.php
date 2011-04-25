<?php
$this->breadcrumbs = array(
	'Refruangs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refruang', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refruang', 'url' => array('admin')),
);
?>

<h1>Refruangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 