<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


/**
 * CountryController implements the CRUD actions for country model.
 * Code by Toby
 */

class ExampleController extends Controller
{
  public function actionSay($message = 'Toby')
  {
    echo "Hello $message";
    exit;
  }
}