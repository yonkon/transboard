<?php

class AdvertController extends Controller
{
	public function actionAdd()
	{
		$this->render('add');
	}

	public function actionCategory()
	{
		$this->render('category');
	}

	public function actionFavourites()
	{
		$this->render('favourites');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionNew()
	{
		$this->render('new');
	}

	public function actionSearch()
	{
		$this->render('search');
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