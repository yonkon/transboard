<?php

class AdminModelController extends AController
{
	public function actionAdd()
  {
    /** @var CWebApplication $app */
    $app = Yii::app();
//    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    $make = $_REQUEST['make'];
    $model = new AdvertModel();
    $model->setAttributes($_REQUEST);

    if(empty($make)) {
      if(empty($_REQUEST['ajax'])) {
        $app->user->setFlash('error', __('Марка не указана'));
        $this->render('edit', array('model' => $model));
        return;
      } else {
        $this->jsonAnswer('', self::STATUS_ERROR, __('Марка не указана'));
        die();
      }
    }

    $model = AdvertModel::model()->find('name LIKE :name AND make = :make', array(':name' => $name, ':make' => $make));

    if(empty($_REQUEST['ajax'])) {
      if(empty($model)) {
        $app->user->setFlash('error', __('Модель не найдена'));
      } else {
        $model->name = $name;
        $model->description = $description;
        if(!$model->save()) {
          $app->user->setFlash('error', __('Модель не найдена'));
        }
      }
      $this->render('edit', array('model' => $model));
    } else {
      if(!empty($model)) {
        self::jsonAnswer('', self::STATUS_ERROR, __('Такая модель уже существует'));
        die();
      }
      $model = new advertModel();
      $model->name = $name;
      $model->description = $description;
      $model->make = $make;
      $status = $model->save();

      if($status) {
        self::jsonAnswer(array('id' => $model->id));
      } else {
        self::jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($model));
      }
      die();
    }
  }


  public function actionDelete()
	{
		$this->render('delete');
	}

  public function actionEdit($id)
  {
    /** @var CWebApplication $app */
    $app = Yii::app();
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];

    $model = AdvertModel::model()->find('id = :id', array(':id' => $id));

    if(empty($_REQUEST['ajax'])) {
      if(empty($model)) {
        $app->user->setFlash('error', __('Модель не найдена'));
      } else {
        $model->name = $name;
        $model->description = $description;
        if(!$model->save()) {
          $app->user->setFlash('error', __('Модель не найдена'));
        }
      }
      $this->render('edit', array('model' => $model));
    } else {
      if(empty($model)) {
        self::jsonAnswer('', self::STATUS_ERROR, __('Такая модель уже существует'));
        die();
      }
      $model->name = $name;
      $model->description = $description;
      $status = $model->save();

      if($status) {
        self::jsonAnswer(array('id' => $model->id));
      } else {
        self::jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($model));
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
