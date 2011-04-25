<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'dattarif-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idtindakan'); ?>
		<?php echo $form->dropDownList($model, 'idtindakan', GxHtml::listDataEx(Reftindakan::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idtindakan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tindakan'); ?>
		<?php echo $form->textField($model, 'tindakan', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tindakan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kdtambah'); ?>
		<?php echo $form->dropDownList($model, 'kdtambah', GxHtml::listDataEx(RefKodeTambah::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'kdtambah'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model, 'type', GxHtml::listDataEx(Reftype::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tarif'); ?>
		<?php echo $form->textField($model, 'tarif', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'tarif'); ?>
		</div><!-- row -->

		<label>Dattindakans</label>
		<?php echo $form->checkBoxList($model, 'dattindakans', GxHtml::encodeEx(GxHtml::listDataEx(Dattindakan::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Tindakan Igds</label>
		<?php echo $form->checkBoxList($model, 'tindakanIgds', GxHtml::encodeEx(GxHtml::listDataEx(TindakanIgd::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('dattarif/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->