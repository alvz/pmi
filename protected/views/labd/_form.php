<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'labd-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idlabh'); ?>
		<?php echo $form->dropDownList($model, 'idlabh', GxHtml::listDataEx(Labh::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idlabh'); ?>
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
		<div class="row">
		<?php echo $form->labelEx($model,'ur_labd'); ?>
		<?php echo $form->textField($model, 'ur_labd', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'ur_labd'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'norm_value'); ?>
		<?php echo $form->textField($model, 'norm_value', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'norm_value'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('labd/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->