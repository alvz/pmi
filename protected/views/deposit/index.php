<?php
$this->breadcrumbs = array(
	'Deposits',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Deposit', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Deposit', 'url' => array('admin')),
);
?>

<h1>Deposits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 