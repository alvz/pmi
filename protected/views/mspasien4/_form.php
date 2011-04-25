<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'mspasien4-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model, 'nama', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nama'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->dropDownList($model, 'agama', GxHtml::listDataEx(Refagama::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'agama'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('mspasien4/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->