<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ASIN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ASIN), array('view', 'id'=>$data->ASIN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Content')); ?>:</b>
	<?php echo CHtml::encode($data->Content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductGroup')); ?>:</b>
	<?php echo CHtml::encode($data->ProductGroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductTypeName')); ?>:</b>
	<?php echo CHtml::encode($data->ProductTypeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LowestNewPrice')); ?>:</b>
	<?php echo CHtml::encode($data->LowestNewPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Feature')); ?>:</b>
	<?php echo CHtml::encode($data->Feature); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ListPrice')); ?>:</b>
	<?php echo CHtml::encode($data->ListPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LargeImage')); ?>:</b>
	<?php echo CHtml::encode($data->LargeImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ListImages')); ?>:</b>
	<?php echo CHtml::encode($data->ListImages); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Binding')); ?>:</b>
	<?php echo CHtml::encode($data->Binding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Brand')); ?>:</b>
	<?php echo CHtml::encode($data->Brand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->Manufacturer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Model')); ?>:</b>
	<?php echo CHtml::encode($data->Model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CountView')); ?>:</b>
	<?php echo CHtml::encode($data->CountView); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Created')); ?>:</b>
	<?php echo CHtml::encode($data->Created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreateBy')); ?>:</b>
	<?php echo CHtml::encode($data->CreateBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	*/ ?>

</div>