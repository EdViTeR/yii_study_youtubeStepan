<?php 

namespace app\controllers;

use Yii;


class PostController extends AppController 
{

	// public $layout = 'basic';

	public function actionIndex() {
        return $this->render('test');
	}

	public function actionShow() {
		$this->layout = 'basic';
		// $names = ['111', '222', '333'];
		// $a = $this->debug($names);
        return $this->render('show');
	}

}