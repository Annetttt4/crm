<?php
namespace app\models;

use yii\db\ActiveRecord;
use  yii\db\Query;

class Crm extends ActiveRecord{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{give}}';
    }
    public static function getDb()
    {
        // использовать компонент приложения "db"
        return \Yii::$app->db;  
    }
    // public function Orientation2(){
    //     $rows=(new \yii\db\Query())
    //     ->select(['give.id','give.surname','give.name','give.email','orientation.name'])
    //     ->from('give')
    //     ->join('orientation','orientation.id=give.orientation')
    //     ->where(['orientation.id'=>6]);
    // }
}
 