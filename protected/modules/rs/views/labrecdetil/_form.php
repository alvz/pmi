<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'labrecdetil-form',
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
		<?php echo $form->labelEx($model,'hasil'); ?>
		<?php echo $form->textField($model, 'hasil', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'hasil'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kd_labh'); ?>
		<?php echo $form->textField($model, 'kd_labh', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'kd_labh'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kd_labd'); ?>
		<?php echo $form->textField($model, 'kd_labd', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'kd_labd'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('labrecdetil/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->