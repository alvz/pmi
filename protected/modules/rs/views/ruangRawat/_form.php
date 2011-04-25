<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'ruang-rawat-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'ruangan'); ?>
		<?php echo $form->textField($model, 'ruangan', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ruangan'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'kdruang'); ?>
		<?php echo $form->textField($model, 'kdruang', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'kdruang'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'peruntukan'); ?>
		<?php echo $form->dropDownList($model, 'peruntukan', GxHtml::listDataEx(Refperuntukan::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'peruntukan'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'kelas'); ?>
		<?php echo $form->dropDownList($model, 'kelas', GxHtml::listDataEx(Refkelasrawat::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'kelas'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tarif'); ?>
		<?php echo $form->textField($model, 'tarif', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'tarif'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model, 'foto', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'foto'); ?>
		</div><!-- row -->
<!-- june -->
<div class="row"></div>
<!-- june -->
		<!--label--><!--/label-->
		                
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('ruangrawat/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->