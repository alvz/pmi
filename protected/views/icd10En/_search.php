<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'diagnosis_code'); ?>
		<?php echo $form->textField($model, 'diagnosis_code', array('maxlength' => 12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'class_sub'); ?>
		<?php echo $form->textField($model, 'class_sub', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'type'); ?>
		<?php echo $form->textField($model, 'type', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'inclusive'); ?>
		<?php echo $form->textArea($model, 'inclusive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'exclusive'); ?>
		<?php echo $form->textArea($model, 'exclusive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'notes'); ?>
		<?php echo $form->textArea($model, 'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'std_code'); ?>
		<?php echo $form->textField($model, 'std_code', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sub_level'); ?>
		<?php echo $form->textField($model, 'sub_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'remarks'); ?>
		<?php echo $form->textArea($model, 'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'extra_codes'); ?>
		<?php echo $form->textArea($model, 'extra_codes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'extra_subclass'); ?>
		<?php echo $form->textArea($model, 'extra_subclass'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
