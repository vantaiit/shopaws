<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ASIN'); ?>
		<?php echo $form->textField($model,'ASIN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ASIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Content'); ?>
		<?php echo $form->textArea($model,'Content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductGroup'); ?>
		<?php echo $form->textField($model,'ProductGroup',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ProductGroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductTypeName'); ?>
		<?php echo $form->textField($model,'ProductTypeName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ProductTypeName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LowestNewPrice'); ?>
		<?php echo $form->textField($model,'LowestNewPrice'); ?>
		<?php echo $form->error($model,'LowestNewPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Feature'); ?>
		<?php echo $form->textArea($model,'Feature',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Feature'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ListPrice'); ?>
		<?php echo $form->textField($model,'ListPrice'); ?>
		<?php echo $form->error($model,'ListPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LargeImage'); ?>
		<?php echo $form->textField($model,'LargeImage',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'LargeImage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ListImages'); ?>
		<?php echo $form->textArea($model,'ListImages',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ListImages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Binding'); ?>
		<?php echo $form->textField($model,'Binding',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Binding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Brand'); ?>
		<?php echo $form->textField($model,'Brand',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Manufacturer'); ?>
		<?php echo $form->textField($model,'Manufacturer',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Manufacturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Model'); ?>
		<?php echo $form->textField($model,'Model',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CountView'); ?>
		<?php echo $form->textField($model,'CountView'); ?>
		<?php echo $form->error($model,'CountView'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Created'); ?>
		<?php echo $form->textField($model,'Created'); ?>
		<?php echo $form->error($model,'Created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CreateBy'); ?>
		<?php echo $form->textField($model,'CreateBy'); ?>
		<?php echo $form->error($model,'CreateBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->