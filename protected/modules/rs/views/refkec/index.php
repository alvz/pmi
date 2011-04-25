<?php
$this->breadcrumbs = array(
	'Refkecs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refkec', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refkec', 'url' => array('admin')),
);
?>

<h1>Refkecs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 