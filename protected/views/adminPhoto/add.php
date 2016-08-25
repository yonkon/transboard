<?php
/**
 * @var $this AdminPhotoController
 * @var AdvertPhoto $model
 */

$this->breadcrumbs=array(
	'Admin Photo'=>array('/adminPhoto'),
	'Add',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php
echo CHtml::form('','post',array('enctype'=>'multipart/form-data'));
echo CHtml::activeFileField($model, 'image');
echo CHtml::error($model, 'image');
echo CHtml::activeTextField($model, 'id_advert');
echo CHtml::error($model, 'id_advert');
echo CHtml::submitButton(__("загрузить фото"));
echo CHtml::endForm(); ?>
