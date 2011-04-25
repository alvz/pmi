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
		<?php echo $form->label($model, 'ruangan'); ?>
		<?php echo $form->textField($model, 'ruangan', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'kdruang'); ?>
		<?php echo $form->textField($model, 'kdruang', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'peruntukan'); ?>
		<?php echo $form->dropDownList($model, 'peruntukan', GxHtml::listDataEx(Refperuntukan::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'kelas'); ?>
		<?php echo $form->dropDownList($model, 'kelas', GxHtml::listDataEx(Refkelasrawat::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tarif'); ?>
		<?php echo $form->textField($model, 'tarif', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'foto'); ?>
		<?php echo $form->textField($model, 'foto', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
