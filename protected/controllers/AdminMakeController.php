<?php

class AdminMakeController extends AController
{
	public function actionAdd()
	{
    $make = new AdvertMake();
    $make->name = $_REQUEST['name'];
    $make->description = $_REQUEST['description'];
    $status = $make->save();
    if(empty($_REQUEST['ajax'])) {
      $this->render('add', array('make' => $make));
    } else {
      if($status) {
        self::jsonAnswer(array('id' => $make->id));
      } else {
        self::jsonAnswer(null, self::STATUS_ERROR, CHtml::errorSummary($make));
      }
      die();
    }
	}

	public function actionDelete()
	{
		$this->render('delete');
	}

	public function actionEdit()
	{
    $model=new AdvertMake;

    // uncomment the following code to enable ajax-based validation
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='advert-make-edit-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

    if(isset($_POST['AdvertMake']))
    {
      $model->attributes=$_POST['AdvertMake'];
      if($model->validate())
      {
        // form inputs are valid, do something here
        return;
      }
    }
    $this->render('edit',array('model'=>$model));
	}

	public function actionList()
	{
		$this->render('list');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
