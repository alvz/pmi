<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'register-igd-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
                    <?php echo $form->labelEx($model,'tglplg'); ?>
                    <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model' => $model,
                            'attribute' => 'tglplg',
                            'value' => $model->tglplg,
                            'options' => array(
                                    'showButtonPanel' => true,
                                    'changeYear' => true,
                                    'dateFormat' => 'yy-mm-dd',
                                    ),
                            ));
                    ; ?>
                    <?php echo $form->error($model,'tglplg'); ?>
                </div><!-- row -->		
		<div clas="row">
		<?php echo $form->labelEx($model,'jamplg'); ?>
		<?php echo $form->textField($model, 'jamplg'); ?>
		<?php echo $form->error($model,'jamplg'); ?>
		</div><!-- row -->
		
		<div clas="row">
		<?php echo $form->labelEx($model,'alasankeluar'); ?>
		<?php echo $form->dropDownList($model, 'alasankeluar', GxHtml::listDataEx(Refkeluar::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'alasankeluar'); ?>
		</div><!-- row -->		
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('datregister/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->