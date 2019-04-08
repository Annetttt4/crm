<?php
namespace app\models;
 
use yii\db\ActiveRecord;
use app\models\Orientation;


 class Form extends ActiveRecord{
    
  public $orientation1;

    public static function tableName(){
        return 'give';
    }

    public function getOrientation(){
        return $this->hasOne(Orientation::className(),['id'=>'orientation']);
    }

    public function attributeLabels(){
        return[
            'surname'=>'Фамилия',
             'name'=>'Имя',
             'lastname'=>'Отчество',
             'orientation'=>'Направление',
            'phone'=>'Телефон',
            'email'=>'E-mail',
            'klass'=>'Класс',
            'GPA'=>'Средний балл аттестата',
            'orientation1'=>'fdd'
        ];
    }
public function rules(){
    return[
        ['name','required'],
        [['email','comment','surname','lastname','klass','GPA'],'required'],
        ['email','email'],
        ['GPA','string','min'=>1,'tooShort'=>'wrong'],
        ['GPA','string','max'=>4,'tooLong'=>'wrong'],
       //['name','string','lenght'=>[2,5]],
       //['name','myRule'],
    ];
}

 }
 ?>