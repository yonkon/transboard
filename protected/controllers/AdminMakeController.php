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

	public function actionEdit($id)  {
    /** @var CWebApplication $app */
    $app = Yii::app();
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $description = empty($_REQUEST['description']) ? '' : $_REQUEST['description'];

    $make = AdvertMake::model()->find('id = :id', array(':id' => $id));

    if(empty($_REQUEST['ajax'])) {
      if(empty($make)) {
        $app->user->setFlash('error', __('Марки не найдено'));
      } else {
        $make->name = $name;
        $make->description = $description;
        if(!$make->save()) {
          $app->user->setFlash('error', __('Марки не найдено'));
        }
      }
      $this->render('edit', array('make' => $make));
    } else {
      if(empty($make)) {
        self::jsonAnswer('', self::STATUS_ERROR, __('Марки не найдено'));
        die();
      }
      $make->name = $name;
      $make->description = $description;
      $status = $make->save();

      if($status) {
        self::jsonAnswer(array('id' => $make->id));
      } else {
        self::jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($make));
      }
      die();
    }
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
