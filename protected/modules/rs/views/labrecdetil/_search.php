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
		<?php echo $form->label($model, 'kd_pasien'); ?>
		<?php echo $form->textField($model, 'kd_pasien', array('maxlength' => 17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'kd_lab'); ?>
		<?php echo $form->textField($model, 'kd_lab', array('maxlength' => 12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tgl_masuk'); ?>
		<?php echo $form->textField($model, 'tgl_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tgl_lab'); ?>
		<?php echo $form->textField($model, 'tgl_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hasil'); ?>
		<?php echo $form->textField($model, 'hasil', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'kd_labh'); ?>
		<?php echo $form->textField($model, 'kd_labh', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'kd_labd'); ?>
		<?php echo $form->textField($model, 'kd_labd', array('maxlength' => 3)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
