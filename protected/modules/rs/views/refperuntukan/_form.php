<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refperuntukan-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'peruntukan'); ?>
		<?php echo $form->textField($model, 'peruntukan', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'peruntukan'); ?>
		</div><!-- row -->

		<label>Kamars</label>
		<?php echo $form->checkBoxList($model, 'kamars', GxHtml::encodeEx(GxHtml::listDataEx(Kamar::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refperuntukan/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->