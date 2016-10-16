<?php

class AdminParamValueController extends AController
{
	public function actionAdd()
	{
		$pv = new ParamValue();
		$pv->param = $_REQUEST['param'];
		$pv->string = $_REQUEST['string'];
		$pv->number = $_REQUEST['number'];
		if ($pv->save()) {
			$this->jsonAnswer(array('id' => $pv->id));
			die();
		} else {
			$this->jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($pv));
			die();
		}
		$this->render('add');
	}

	public function actionDelete()
	{
		$id = $_REQUEST['id'];
		$pv = ParamValue::model()->findByPk($id);
		if($_REQUEST['ajax'] == 'ajax' ) {
			if(!empty($pv) && $pv->delete()) {
				self::jsonAnswer();
			} else {
				self::jsonAnswer('', self::STATUS_ERROR, 'Невозможно удалить значение: ' . CHtml::errorSummary($pv) );
			}
			die();
		}
		$pv->delete();
		$this->render('delete', array('model' => $pv));
	}

	public function actionEdit()
	{
		$this->render('edit');
	}

	public function actionList($id)
	{
		/** @var Param $param */
		$param = Param::model()->findByPk($id);
		$values = $param->initParamValues();
		$this->render('list', array('param' => $param, 'values' => $values));
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
	public function beforeAction($action)
	{
		$app = Yii::app();
		/** @var CWebApplication $app */
		$app->clientScript->registerCoreScript('jquery');

		$app->clientScript->registerScriptFile('/js/adminParamValue.js', CClientScript::POS_BEGIN);
		$app->clientScript->registerScriptFile('/js/tablesorter/jquery.tablesorter.js', CClientScript::POS_BEGIN);
		$app->clientScript->registerCssFile('/js/tablesorter/themes/blue/style.css');
		return parent::beforeAction($action);
	}

}
