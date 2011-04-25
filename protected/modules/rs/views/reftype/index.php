<?php
$this->breadcrumbs = array(
	'Reftypes',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Reftype', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftype', 'url' => array('admin')),
);
?>

<h1>Reftypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 