<?php

namespace app\models;


use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\ActiveField;
use app\models\Orientation;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

class search extends Give{

  
    public $orientation;


public static function orientations()
{
    return [
        [['id', 'orientation','klass'], 'integer'],
        [['GPA'],'double'],
        [['suranme', 'name', 'lastname','phone','email','status'], 'safe'],
    ];
}
public static function search($params)
{
    $query = Give::find();
    $query→joinWith(['orientation']);
    $dataProvider = new ActiveDataProvider([
        'query' => $query,
    ]);
    $dataProvider->sort->attributes['orientation'] = [
        'asc' => [Orientation::tableName().'.orientation' => SORT_ASC],
        'desc' => [Orientation::tableName().'.orientation' => SORT_DESC],
    ];
    $this→load($params);
    if (!$this->validate()) {
        return $dataProvider;
    }
    $query->andFilterWhere(['like', 'id', $this→id])
        ->andFilterWhere(['like', 'surname', $this→surname])
        ->andFilterWhere(['like', 'name', $this→name])
        ->andFilterWhere(['like', 'email', $this→email])
        ->andFilterWhere(['like', 'статус', $this→status]);
        //->andFilterWhere(['like', User_roles::tableName().'.user_role', $this→roleName]);
    return $dataProvider;
}
}