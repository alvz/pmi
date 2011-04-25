<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'layanpoli-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'noreg'); ?>
		<?php echo $form->textField($model, 'noreg'); ?>
		<?php echo $form->error($model,'noreg'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'diag'); ?>
		<?php echo $form->textField($model, 'diag', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'diag'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tekanandarahl'); ?>
		<?php echo $form->textField($model, 'tekanandarahl', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'tekanandarahl'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tekanandarahh'); ?>
		<?php echo $form->textField($model, 'tekanandarahh', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'tekanandarahh'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'denyutnadil'); ?>
		<?php echo $form->textField($model, 'denyutnadil', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'denyutnadil'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'denyutnadih'); ?>
		<?php echo $form->textField($model, 'denyutnadih', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'denyutnadih'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'suhu'); ?>
		<?php echo $form->textField($model, 'suhu', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'suhu'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tb'); ?>
		<?php echo $form->textField($model, 'tb', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tb'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'bb'); ?>
		<?php echo $form->textField($model, 'bb', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'bb'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'kesadaran'); ?>
		<?php echo $form->textField($model, 'kesadaran', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'kesadaran'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'respirasi'); ?>
		<?php echo $form->textField($model, 'respirasi', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'respirasi'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'bab'); ?>
		<?php echo $form->textField($model, 'bab', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'bab'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'bak'); ?>
		<?php echo $form->textField($model, 'bak', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'bak'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'vomitting'); ?>
		<?php echo $form->textField($model, 'vomitting', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'vomitting'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'ivfd'); ?>
		<?php echo $form->textField($model, 'ivfd', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ivfd'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'diagdokterp'); ?>
		<?php echo $form->textField($model, 'diagdokterp'); ?>
		<?php echo $form->error($model,'diagdokterp'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'diagdokters1'); ?>
		<?php echo $form->textField($model, 'diagdokters1'); ?>
		<?php echo $form->error($model,'diagdokters1'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'diagdokters2'); ?>
		<?php echo $form->textField($model, 'diagdokters2'); ?>
		<?php echo $form->error($model,'diagdokters2'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'diagdokters3'); ?>
		<?php echo $form->textField($model, 'diagdokters3'); ?>
		<?php echo $form->error($model,'diagdokters3'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'diagdokters4'); ?>
		<?php echo $form->textField($model, 'diagdokters4'); ?>
		<?php echo $form->error($model,'diagdokters4'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'cat_khusus'); ?>
		<?php echo $form->textArea($model, 'cat_khusus'); ?>
		<?php echo $form->error($model,'cat_khusus'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('layanpoli/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->