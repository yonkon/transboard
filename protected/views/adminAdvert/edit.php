<?php
/* @var $this AdvertController */
/* @var $model Advert */
/* @var $form CActiveForm */
?>

<div class="form advert-edit" >

  <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'advert-AdvertEdit-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
  )); ?>

  <p class="note">Fields with <span class="required">*</span> are required.</p>

  <?php echo $form->errorSummary($model); ?>

  <div class="row">
    <?php echo $form->labelEx($model,'created'); ?>
    <?php echo $form->dateField($model,'created'); ?>
    <?php echo $form->error($model,'created'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'name'); ?>
    <?php echo $form->textField($model,'name'); ?>
    <?php echo $form->error($model,'name'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'user'); ?>
    <?php
     echo $form->hiddenField($model,'user', array('id' => 'user'));
    ?>
    <input type="text" id="user_query">
    <select class="hidden" id="user_select"></select>
    <?php echo $form->error($model,'user'); ?>
    <?
    ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'description'); ?>
    <?php echo $form->textArea($model,'description'); ?>
    <?php echo $form->error($model,'description'); ?>
  </div>

<!--  <div class="row">
    <?php /*echo $form->labelEx($model,'updated'); */?>
    <?php /*echo $form->textField($model,'updated'); */?>
    <?php /*echo $form->error($model,'updated'); */?>
  </div>
-->
  <div class="row">
    <?php echo $form->labelEx($model,'status'); ?>
    <?php /** @var array $advertStatuses */
    echo $form->dropDownList($model,'status', $advertStatuses); ?>
    <?php echo $form->error($model,'status'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'category'); ?>
    <?php echo $form->textField($model,'category'); ?>
    <?php echo $form->error($model,'category'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'make'); ?>
    <?php echo $form->textField($model,'make'); ?>
    <?php echo $form->error($model,'make'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'model'); ?>
    <?php echo $form->textField($model,'model'); ?>
    <?php echo $form->error($model,'model'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'year'); ?>
    <?php echo $form->textField($model,'year'); ?>
    <?php echo $form->error($model,'year'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'price'); ?>
    <?php echo $form->textField($model,'price'); ?>
    <?php echo $form->error($model,'price'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'currency'); ?>
    <?php echo $form->textField($model,'currency'); ?>
    <?php echo $form->error($model,'currency'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'mileage'); ?>
    <?php echo $form->textField($model,'mileage'); ?>
    <?php echo $form->error($model,'mileage'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'region'); ?>
    <?php echo $form->textField($model,'region'); ?>
    <?php echo $form->error($model,'region'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'city'); ?>
    <?php echo $form->textField($model,'city'); ?>
    <?php echo $form->error($model,'city'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'published_to'); ?>
    <?php echo $form->textField($model,'published_to'); ?>
    <?php echo $form->error($model,'published_to'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'phone'); ?>
    <?php echo $form->textField($model,'phone'); ?>
    <?php echo $form->error($model,'phone'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'link'); ?>
    <?php echo $form->textField($model,'link'); ?>
    <?php echo $form->error($model,'link'); ?>
  </div>


  <div class="row buttons">
    <?php echo CHtml::submitButton('Submit'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- form -->
