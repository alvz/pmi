<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div clas="span-7 ">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div clas="span-7 last">
		<?php echo $form->label($model, 'noreg'); ?>
		<?php echo $form->textField($model, 'noreg', array('maxlength' => 12)); ?>
	</div>

	<div clas="span-7 ">
		<?php echo $form->label($model, 'idmr'); ?>
		<?php echo $form->dropDownList($model, 'idmr', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div clas="span-7 last">
		<?php echo $form->label($model, 'tgl'); ?>
		<?php echo $form->textField($model, 'tgl'); ?>
	</div>

	<div clas="span-7 ">
		<?php echo $form->label($model, 'jam_masuk'); ?>
		<?php echo $form->textField($model, 'jam_masuk'); ?>
	</div>

	<div clas="span-7 last">
		<?php echo $form->label($model, 'jenis_tanggungan'); ?>
		<?php echo $form->dropDownList($model, 'jenis_tanggungan', GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div clas="row">
		<?php echo $form->label($model, 'asuransi'); ?>
		<?php echo $form->textField($model, 'asuransi', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
