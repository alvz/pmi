<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refkec-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'KDPROP'); ?>
		<?php echo $form->textField($model, 'KDPROP', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'KDPROP'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'KDKEC'); ?>
		<?php echo $form->textField($model, 'KDKEC', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'KDKEC'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'iddati'); ?>
		<?php echo $form->dropDownList($model, 'iddati', GxHtml::listDataEx(Refdati::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'iddati'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'KDDATI2'); ?>
		<?php echo $form->textField($model, 'KDDATI2', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'KDDATI2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'NMKEC'); ?>
		<?php echo $form->textField($model, 'NMKEC', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'NMKEC'); ?>
		</div><!-- row -->

		<label>Mspasien2s</label>
		<?php echo $form->checkBoxList($model, 'mspasien2s', GxHtml::encodeEx(GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refkec/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->