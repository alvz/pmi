<?php
$this->breadcrumbs = array(
	'Refdokters',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refdokter', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refdokter', 'url' => array('admin')),
);
?>

<h1>Refdokters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 