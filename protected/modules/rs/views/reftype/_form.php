<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'reftype-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model, 'type', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'type'); ?>
		</div><!-- row -->

		<label>Datregisters</label>
		<?php echo $form->checkBoxList($model, 'datregisters', GxHtml::encodeEx(GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('reftype/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->