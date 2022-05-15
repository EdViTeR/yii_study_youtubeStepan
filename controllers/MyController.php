<?php 

namespace app\controllers;

use yii\web\Controller;


class MyController extends Controller
{

	public function actionIndex($id = null){
		$hi = 'Hello, World';
		$names = ['111', '222', '333'];

		if (!$id) {
			$id = 'Imagick';
		}

		return $this->render('index', [
			'hello' => $hi,
			'names' => $names,
			'id' => $id,
		]);
	}

}