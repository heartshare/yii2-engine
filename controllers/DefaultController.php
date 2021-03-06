<?php

namespace mrssoft\engine\controllers;

use Yii;
use mrssoft\engine\Controller;

class DefaultController extends \mrssoft\engine\Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
