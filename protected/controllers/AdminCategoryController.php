<?php

class AdminCategoryController extends AController
{
	public function actionAdd()
	{
    $category = new AdvertCategory();
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    if(!empty(AdvertCategory::model()->find('name LIKE :name ', array(':name' => $name)))) {
      self::jsonAnswer('', self::STATUS_ERROR, __('Такая категория уже существует'));
      die();
    }
    $category->name = $name;
    $category->description = $description;
    $status = $category->save();
    if(empty($_REQUEST['ajax'])) {
      $this->render('add', array('category' => $category));
    } else {
      if($status) {
        self::jsonAnswer(array('id' => $category->id));
      } else {
        self::jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($category));
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
    $category = AdvertCategory::model()->find('id = :id', array(':id' => $id));

    if(empty($_REQUEST['ajax'])) {
      if(empty($category)) {
        $app->user->setFlash('error', __('Категория не найдена'));
      } else {
        $category->name = $name;
        $category->description = $description;
        if(!$category->save()) {
          $app->user->setFlash('error', __('Категория не найдена'));
        }
      }
      $this->render('edit', array('category' => $category));
    } else {
      if(empty($category)) {
        self::jsonAnswer('', self::STATUS_ERROR, __('Такая категория уже существует'));
        die();
      }
      $category->name = $name;
      $category->description = $description;
      $status = $category->save();

      if($status) {
        self::jsonAnswer(array('id' => $category->id));
      } else {
        self::jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($category));
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
