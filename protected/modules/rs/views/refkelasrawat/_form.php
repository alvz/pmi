<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refkelasrawat-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idkelas'); ?>
		<?php echo $form->textField($model, 'idkelas', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'idkelas'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kelas'); ?>
		<?php echo $form->textField($model, 'kelas', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'kelas'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textField($model, 'lokasi', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'lokasi'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tarif'); ?>
		<?php echo $form->textField($model, 'tarif', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'tarif'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refkelasrawat/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->