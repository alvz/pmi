<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refobat-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'kdobat'); ?>
		<?php echo $form->textField($model, 'kdobat', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'kdobat'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'namaobat'); ?>
		<?php echo $form->textField($model, 'namaobat', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'namaobat'); ?>
		</div><!-- row -->

		<label>Obats</label>
		<?php echo $form->checkBoxList($model, 'obats', GxHtml::encodeEx(GxHtml::listDataEx(Obat::model()->findAllAttributes(null, true)), false, true)); ?>
                <div class="row"></div>
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refobat/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->