<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'datrrwt-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 ">
		<?php echo $form->labelEx($model,'idreg'); ?>
		<?php echo $form->dropDownList($model, 'idreg', GxHtml::listDataEx(RegisterIgd::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idreg'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tglmasuk'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tglmasuk',
			'value' => $model->tglmasuk,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tglmasuk'); ?>
		</div><!-- row -->
		<div class="span-8 ">
		<?php echo $form->labelEx($model,'jammasuk'); ?>
		<?php echo $form->textField($model, 'jammasuk'); ?>
		<?php echo $form->error($model,'jammasuk'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'ruang'); ?>
		<?php echo $form->dropDownList($model, 'ruang', GxHtml::listDataEx(RuangRawat::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'ruang'); ?>
		</div><!-- row -->
		<div class="span-8 ">
		<?php echo $form->labelEx($model,'kamar'); ?>
		<?php echo $form->dropDownList($model, 'kamar', GxHtml::listDataEx(Kamar::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'kamar'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'bed'); ?>
		<?php echo $form->dropDownList($model, 'bed', GxHtml::listDataEx(Bed::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'bed'); ?>
		</div><!-- row -->
		<div class="span-8 ">
		<?php echo $form->labelEx($model,'byhari'); ?>
		<?php echo $form->textField($model, 'byhari', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'byhari'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tglklr'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tglklr',
			'value' => $model->tglklr,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tglklr'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'jamklr'); ?>
		<?php echo $form->textField($model, 'jamklr'); ?>
		<?php echo $form->error($model,'jamklr'); ?>
		</div><!-- row -->

		<!--label>Tindakan Igds</label-->
		<?php //echo $form->checkBoxList($model, 'tindakanIgds', GxHtml::encodeEx(GxHtml::listDataEx(TindakanIgd::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('datrrwt/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->