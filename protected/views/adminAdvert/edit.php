<?php
/** @var $this adminAdvertController
 * @var $model Advert
 * @var $form SActiveForm
 * @var User $owner
 */
?>

<div class="form advert-edit" >

  <?php $form=$this->beginWidget('application.extensions.widgets.SActiveForm', array(
    'id'=>'advert-AdvertEdit-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
  )); ?>

  <p class="note">Fields with <span class="required">*</span> are required.</p>

  <?php echo $form->errorSummary($model); ?>
  <div>
<!--  <div class="row">-->
<?php //echo $form->labelEx($model,'created'); ?>
<?php //echo $form->dateField($model,'created'); ?>
<?php //echo $form->error($model,'created'); ?>
<!--  </div>-->

  <div class="row">
    <?php echo $form->labelEx($model,'name'); ?>
    <?php echo $form->textArea($model,'name'); ?>
    <?php echo $form->error($model,'name'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'user'); ?>
    <?php
    echo $form->autoComboboxField($model, 'user', 'adminAdvert/users', $owner->username . ' (' . $owner->email . ')' );
    echo $form->error($model,'user'); ?>
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
    /** @var array $advertStatusesOptions */
    echo $form->dropDownList($model,'status', $advertStatuses, array('options' => $advertStatusesOptions)); ?>
    <?php echo $form->error($model,'status'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'category'); ?>
<!--    --><?php //echo $form->hiddenField($model,'category'); ?>
<!--    --><?php //echo $form->textField($model->category0,'name'); ?>
    <?php echo $form->autocompletePopupField(
      $model,
      'category',
      'adminAdvert/categories',
      null,
      empty($model->category0)?'':$model->category0->name,
      'dataCategory',
      'successCategory',
      'errorCategory'
    ); ?>
    <?php echo $form->error($model,'category'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'make'); ?>
    <?php echo $form->autocompletePopupField(
      $model,
      'make',
      'adminAdvert/makes',
      null,
      empty($model->make0)?'':$model->make0->name,
      'dataMake',
      'successMake',
      'errorMake'
      ); ?>
<!--    --><?php //echo $form->textField($model->make0,'name'); ?>
    <?php echo $form->error($model,'make'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'model'); ?>
    <?php echo $form->autocompletePopupField(
      $model,
      'model',
      'adminAdvert/models',
      null,
      empty($model->model0)?'':$model->model0->name,
      'dataModel',
      'successModel',
      'errorModel'
    ); ?>
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

    <?php /** @var array $currencies_array
    @var array $currenciesOptions
     */
    echo $form->dropDownList($model,'currency', $allCurrencies, array('options' => $currenciesOptions)); ?>

<!--    --><?php //echo $form->textField($model,'currency'); ?>
    <?php echo $form->error($model,'currency'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'mileage'); ?>
    <?php echo $form->textField($model,'mileage'); ?>
    <?php echo $form->error($model,'mileage'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'region'); ?>
    <?php  echo $form->dropDownList($model,'region', $allRegions, array('options' => $regionsOptions)); ?>
    <?php echo $form->error($model,'region'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'city'); ?>
<!--    --><?php //echo $form->textField($model,'city'); ?>
    <?php  echo $form->dropDownList($model,'city', $allCities, array('options' => $citiesOptions)); ?>

    <?php echo $form->error($model,'city'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'published_to'); ?>
    <?php echo $form->dateTimeField($model,'published_to'); ?>
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
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Submit'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- form -->
<div id="autocomplete_popup">
  <div class="autocomplete_window">
    <span id="autocomplete_close"></span>
    <div class="autocomplete_content">

    </div>
  </div>
</div>
