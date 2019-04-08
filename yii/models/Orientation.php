<?php
namespace app\models;
use yii\db\ActiveRecord; 
 
class Orientation extends ActiveRecord // расширяем класс ActiveRecord 
{
    public static function tableName(){
        return 'orientation';
    }
   public function getGive(){
       return $this->hasMany(Give::className(),['orientation'=>'id']);
   }
}
