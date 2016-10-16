<?php

class AdminParamController extends AController
{
	public function actionAdd()
	{
		$param = new Param();
		if(!empty($_REQUEST['Param'])) {
			$param->setAttributes($_REQUEST['Param']);
			if($param->validate()) {
				if($param->save()) {
					Yii::app()->user->setFlash('success', 'Параметр успешн добавлен');
					$this->redirect(Yii::app()->createUrl('adminParamValue/list/'.$param->id));
				}
			}
		}

		$this->render('add', array('model' => $param));
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
		$params = Param::model()->with('paramValues')->findAll();
		$this->render('list', array('params' => $params));
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
	public function getParamValuesHtml(Param $param)
	{
		$param->initParamValues();
		return $this->renderPartial('partial/paramValues', array('param' => $param), true );
	}

	public function beforeAction($action)
	{
		$app = Yii::app();
		/** @var CWebApplication $app */
		$app->clientScript->registerCoreScript('jquery');

		$app->clientScript->registerScriptFile('/js/adminParam.js', CClientScript::POS_BEGIN);
		$app->clientScript->registerScriptFile('/js/tablesorter/jquery.tablesorter.js', CClientScript::POS_BEGIN);
		$app->clientScript->registerCssFile('/js/tablesorter/themes/blue/style.css');
		return parent::beforeAction($action);
	}

}
