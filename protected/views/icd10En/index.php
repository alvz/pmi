<?php
$this->breadcrumbs = array(
	'Icd10 Ens',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Icd10En', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Icd10En', 'url' => array('admin')),
);
?>

<h1>Icd10 Ens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 