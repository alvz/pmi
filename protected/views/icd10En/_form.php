<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'icd10-en-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'class_sub'); ?>
		<?php echo $form->textField($model, 'class_sub', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'class_sub'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model, 'type', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'inclusive'); ?>
		<?php echo $form->textArea($model, 'inclusive'); ?>
		<?php echo $form->error($model,'inclusive'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'exclusive'); ?>
		<?php echo $form->textArea($model, 'exclusive'); ?>
		<?php echo $form->error($model,'exclusive'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model, 'notes'); ?>
		<?php echo $form->error($model,'notes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'std_code'); ?>
		<?php echo $form->textField($model, 'std_code', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'std_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sub_level'); ?>
		<?php echo $form->textField($model, 'sub_level'); ?>
		<?php echo $form->error($model,'sub_level'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model, 'remarks'); ?>
		<?php echo $form->error($model,'remarks'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'extra_codes'); ?>
		<?php echo $form->textArea($model, 'extra_codes'); ?>
		<?php echo $form->error($model,'extra_codes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'extra_subclass'); ?>
		<?php echo $form->textArea($model, 'extra_subclass'); ?>
		<?php echo $form->error($model,'extra_subclass'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('icd10en/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->