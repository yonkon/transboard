<?php
/* @var $this AdminParamController */

$this->breadcrumbs=array(
	'Admin Param'=>array('/adminParam'),
	'Add',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php
/* @var $this ParamController */
/* @var $model Param */
/* @var $form CActiveForm */
?>

	<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'param-add-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enabled'); ?>
		<?php echo $form->textField($model,'enabled'); ?>
		<?php echo $form->error($model,'enabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compare'); ?>
		<?php echo $form->dropDownList($model, 'compare', Param::getCompares())?>
		<?php echo $form->error($model,'compare'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>