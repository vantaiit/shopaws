<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->ASIN)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ASIN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->ASIN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ASIN',
		'Title',
		'Content',
		'ProductGroup',
		'ProductTypeName',
		'LowestNewPrice',
		'Feature',
		'ListPrice',
		'LargeImage',
		'ListImages',
		'Binding',
		'Brand',
		'Manufacturer',
		'Model',
		'CountView',
		'Created',
		'CreateBy',
		'Status',
	),
)); ?>
