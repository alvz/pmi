<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'datsjp-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'nosjp'); ?>
		<?php echo $form->textField($model, 'nosjp', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nosjp'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tglsjp'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tglsjp',
			'value' => $model->tglsjp,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tglsjp'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'nokapst'); ?>
		<?php echo $form->dropDownList($model, 'nokapst', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'nokapst'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('datsjp/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->