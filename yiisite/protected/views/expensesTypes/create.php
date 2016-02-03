<?php
/* @var $this ExpensesTypesController */
/* @var $model ExpensesTypes */

$this->breadcrumbs=array(
	'Expenses Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExpensesTypes', 'url'=>array('index')),
	array('label'=>'Manage ExpensesTypes', 'url'=>array('admin')),
);
?>

<h1>Create ExpensesTypes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>