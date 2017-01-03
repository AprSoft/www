<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class DocController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionGolang($id)
    {
        return $this->render('golang-specification');
    }

}
