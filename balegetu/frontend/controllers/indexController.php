<?php
namespace frontend\controllers;
use yii\web\Controller;
use yii;
class IndexController extends Controller
{
	public $layout = 'layout';
	public function actionIndex(){
		return $this->render('index');
	}

	public function actionLogin(){
		return $this->render('login');
	}
	public function actionYuyue(){
		return $this->render('yuyue');
	}
	public function actionHome(){
		return $this->render('home');
	}
	public function actionShow(){
		return $this->render('show');
	}
	public function actionSign(){
		return $this->render('sign');
	}
}



?>