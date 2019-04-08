<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Form;
use app\models\Give;
use app\models\Orientation;


class MyController extends Controller
{
    public $layout='basic';

public function beforeAction($action){
     if($action->id =='index'){
         $this->enableCsrfValidation=false;
     }

     return parent::beforeAction($action);
}

    public function actionIndex(){
    
        
        if( Yii::$app->request->isAjax){
            //debug($_POST);
           debug(Yii::$app->request->post());
            return test;
        }
        $db=Orientation::find()->asArray()->all();
        
        $model=new Form();
        
        if($model->load(Yii::$app->request->post())){
            if($model->save()){
                Yii::$app->session->setFlash('success','prinnyat');
            }else{
                Yii::$app->session->setFlash('error','error');
            }
        }
        return $this->render('index',compact('model','db'));
    }
    
  
}