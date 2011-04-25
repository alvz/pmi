<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="span-8 last">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'noreg'); ?>
		<?php echo $form->textField($model, 'noreg'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'diag'); ?>
		<?php echo $form->textField($model, 'diag', array('maxlength' => 12)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tekanandarahl'); ?>
		<?php echo $form->textField($model, 'tekanandarahl', array('maxlength' => 3)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tekanandarahh'); ?>
		<?php echo $form->textField($model, 'tekanandarahh', array('maxlength' => 3)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'denyutnadil'); ?>
		<?php echo $form->textField($model, 'denyutnadil', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'denyutnadih'); ?>
		<?php echo $form->textField($model, 'denyutnadih', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'suhu'); ?>
		<?php echo $form->textField($model, 'suhu', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tb'); ?>
		<?php echo $form->textField($model, 'tb', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'bb'); ?>
		<?php echo $form->textField($model, 'bb', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'kesadaran'); ?>
		<?php echo $form->textField($model, 'kesadaran', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'respirasi'); ?>
		<?php echo $form->textField($model, 'respirasi', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'bab'); ?>
		<?php echo $form->textField($model, 'bab', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'bak'); ?>
		<?php echo $form->textField($model, 'bak', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'vomitting'); ?>
		<?php echo $form->textField($model, 'vomitting', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'ivfd'); ?>
		<?php echo $form->textField($model, 'ivfd', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'diagdokterp'); ?>
		<?php echo $form->textField($model, 'diagdokterp'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'diagdokters1'); ?>
		<?php echo $form->textField($model, 'diagdokters1'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'diagdokters2'); ?>
		<?php echo $form->textField($model, 'diagdokters2'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'diagdokters3'); ?>
		<?php echo $form->textField($model, 'diagdokters3'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'diagdokters4'); ?>
		<?php echo $form->textField($model, 'diagdokters4'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'cat_khusus'); ?>
		<?php echo $form->textArea($model, 'cat_khusus'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
