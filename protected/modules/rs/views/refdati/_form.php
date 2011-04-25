<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refdati-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-9">
		<?php echo $form->labelEx($model,'KDPROP'); ?>
		<?php echo $form->textField($model, 'KDPROP', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'KDPROP'); ?>
		</div><!-- row -->
		<div class="span-9 last">
		<?php echo $form->labelEx($model,'KDDATI2'); ?>
		<?php echo $form->textField($model, 'KDDATI2', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'KDDATI2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'NMDATI2'); ?>
		<?php echo $form->textField($model, 'NMDATI2', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'NMDATI2'); ?>
		</div><!-- row -->

		<label>Mspasien2s</label>
		<?php echo $form->checkBoxList($model, 'mspasien2s', GxHtml::encodeEx(GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refdati/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->