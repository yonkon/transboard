<?php

class AdminPhotoController extends Controller
{
	public function actionAdd()
	{
    /** @var CWebApplication $app */
    $app = Yii::app();
    $model=new AdvertPhoto;
    $image = CUploadedFile::getInstance($model,'image');;
    if($image){
      $model->fromUpload($image, $_POST['AdvertPhoto']);
      $model->image = $image;
      if($model->save()){

        
        // перенаправляем на страницу, где выводим сообщение об
        // успешной загрузке
      }
    }
		$this->render('add', array('model' => $model));
	}

	public function actionDelete()
	{
		$this->render('delete');
	}

	public function actionEdit()
	{
		$this->render('edit');
	}

	public function actionList()
	{
		$this->render('list');
	}

	public function actionView()
	{
		$this->render('view');
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
