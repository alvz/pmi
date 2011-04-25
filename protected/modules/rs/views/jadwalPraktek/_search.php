<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'iddokter'); ?>
		<?php echo $form->dropDownList($model, 'iddokter', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hari'); ?>
		<?php echo $form->textField($model, 'hari', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'dari_jam'); ?>
		<?php echo $form->textField($model, 'dari_jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sampai_jam'); ?>
		<?php echo $form->textField($model, 'sampai_jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'psm'); ?>
		<?php echo $form->textField($model, 'psm', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'idpoli'); ?>
		<?php echo $form->dropDownList($model, 'idpoli', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
