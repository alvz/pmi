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
		<?php echo $form->label($model, 'jenis'); ?>
		<?php echo $form->textField($model, 'jenis', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'register'); ?>
		<?php echo $form->textField($model, 'register', array('maxlength' => 17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'kd_dokter'); ?>
		<?php echo $form->textField($model, 'kd_dokter', array('maxlength' => 12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'keterangan'); ?>
		<?php echo $form->textField($model, 'keterangan', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nm_dokter'); ?>
		<?php echo $form->textField($model, 'nm_dokter', array('maxlength' => 40)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
