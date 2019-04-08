<?php
namespace app\models;
use yii\db\ActiveRecord; 
 
class Give extends ActiveRecord // расширяем класс ActiveRecord 
{
    public static function tableName(){
        return 'give';
    }

    
    public function rules()
    {
        return [
            [['worker_id'], 'integer'],
            [['proficiency_level', 'popularity_index'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => Workers::className(), 'targetAttribute' => ['worker_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Worker ID',
            'name' => 'Name',
            'proficiency_level' => 'Proficiency Level',
            'popularity_index' => 'Popularity Index',
        ];
    }
    public function getOrientation(){
        return $this->hasOne(Orientation::className(),['id'=>'orientation']);
    }
    public static function getAll()
      {
             $data = self::find()->all();
             return $data;
      }
   
}
?>