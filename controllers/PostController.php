<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 03.09.2016
 * Time: 16:13
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function actionIndex()
    {
        $model = Post::find()->all();
        return $this->render('index',['model'=>$model]);
    }
}
