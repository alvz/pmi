<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'labrec-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'kd_pasien'); ?>
		<?php echo $form->textField($model, 'kd_pasien', array('maxlength' => 17)); ?>
		<?php echo $form->error($model,'kd_pasien'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kd_lab'); ?>
		<?php echo $form->textField($model, 'kd_lab', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'kd_lab'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tgl_masuk'); ?>
		<?php echo $form->textField($model, 'tgl_masuk'); ?>
		<?php echo $form->error($model,'tgl_masuk'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tgl_lab'); ?>
		<?php echo $form->textField($model, 'tgl_lab'); ?>
		<?php echo $form->error($model,'tgl_lab'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'jenis'); ?>
		<?php echo $form->textField($model, 'jenis', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'jenis'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'register'); ?>
		<?php echo $form->textField($model, 'register', array('maxlength' => 17)); ?>
		<?php echo $form->error($model,'register'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kd_dokter'); ?>
		<?php echo $form->textField($model, 'kd_dokter', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'kd_dokter'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textField($model, 'keterangan', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nm_dokter'); ?>
		<?php echo $form->textField($model, 'nm_dokter', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'nm_dokter'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('labrec/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->