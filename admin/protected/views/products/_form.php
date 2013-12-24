<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOption'=>array('class'=>'id'),
)); ?>
	
<div class="form-body">
	<?php echo $form->errorSummary($model); ?>
    <div class="form-group">       
		<?php echo $form->labelEx($model,'ASIN', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'ASIN',array('size'=>20,'maxlength'=>20,'class'=>'form-control','maxlength'=>50, 'placeholder'=>'Enter text')); ?>
			<?php echo $form->error($model,'ASIN',array('class'=>'help-block')); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Title', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>256,'class'=>'form-control','maxlength'=>50, 'placeholder'=>'Enter text')); ?>
			<?php echo $form->error($model,'Title'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Content', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textArea($model,'Content',array('rows'=>6, 'cols'=>50,'class'=>'form-control','maxlength'=>50, 'placeholder'=>'Enter text')); ?>
			<?php echo $form->error($model,'Content'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'ProductGroup', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'ProductGroup',array('size'=>50,'maxlength'=>50,'class'=>'form-control','maxlength'=>50, 'placeholder'=>'Enter text')); ?>
			<?php echo $form->error($model,'ProductGroup'); ?>
		<div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'ProductTypeName', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'ProductTypeName',array('size'=>50,'maxlength'=>50,'class'=>'form-control','maxlength'=>50, 'placeholder'=>'Enter text')); ?>
			<?php echo $form->error($model,'ProductTypeName'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'LowestNewPrice', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'LowestNewPrice',array('class'=>'form-control','maxlength'=>50, 'placeholder'=>'Enter text')); ?>
			<?php echo $form->error($model,'LowestNewPrice'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Feature', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textArea($model,'Feature',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'Feature'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'ListPrice', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'ListPrice'); ?>
			<?php echo $form->error($model,'ListPrice'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'LargeImage', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'LargeImage',array('size'=>60,'maxlength'=>256)); ?>
			<?php echo $form->error($model,'LargeImage'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'ListImages', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textArea($model,'ListImages',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'ListImages'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Binding', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'Binding',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'Binding'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Brand', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'Brand',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'Brand'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Manufacturer', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'Manufacturer',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'Manufacturer'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Model', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'Model',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'Model'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'CountView', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'CountView'); ?>
			<?php echo $form->error($model,'CountView'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Created', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'Created'); ?>
			<?php echo $form->error($model,'Created'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'CreateBy', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'CreateBy'); ?>
			<?php echo $form->error($model,'CreateBy'); ?>
		</div>
	</div>

	<div class="form-group">      
		<?php echo $form->labelEx($model,'Status', array(
                'class'=>'col-md-3 control-label'
            )); ?>
        <div class="col-md-4">
			<?php echo $form->textField($model,'Status'); ?>
			<?php echo $form->error($model,'Status'); ?>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
