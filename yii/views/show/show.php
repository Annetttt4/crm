
<?php
$this->beginBlock('block1');
?>
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\ActiveField;
use app\models\Orientation;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\search;
?>
<?php
$this->title='odna statiya';
$this->params['breadcrumbs'][] = $this->title;
print_r ($arrayInView);
?>    


      <?=GridView::widget(['dataProvider' => $dataProvider,
      'filterModel' => $searchModel,
    'columns' => [['class' => 'yii\grid\SerialColumn'],
          ['attribute' => 'id','label' => 'id'],
          ['attribute' => 'surname','label' => 'Ф'],
          ['attribute' => 'email','label' => 'email'],
          ['attribute' => 'status','label' => 'status'],
          ['class' => 'yii\grid\ActionColumn']]]);
?>








<!-- 
<?php 

// $form = ActiveForm::begin();
//      $status =varInView;
// // формируем массив, с ключем равным полю 'id' и значением равным полю 'name' 
//     $items = ArrayHelper::map($status,'id','status');
//     $params = [
//         'prompt' => 'Укажите orientation'
//     ];
//     echo $form->field($model, 'status')->dropDownList($items,$params);

// ActiveForm::end();
?>
<div class="container">
<div  class="card-panel hoverable">

<table class="table table-borderless">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">E-mail</th>
      <th scope="col">Статус</th>
      <th scope="col" colspan="3"></th>
    </tr>
    <?php foreach ($varInView as $item): ?>
    <td><?php echo $item->id ?></td>
    <td><?php echo $item->surname ?></td>
    <td><?php echo $item->name ?></td>
    <td><?php echo $item->email ?></td>
    <td><?php echo $item->status ?></td>
    <td><a class="btn-floating "><i class="material-icons">remove_red_eye</i></a></td>
    <td><a  class="btn-floating "><i class="material-icons">edit</i></a></td>
    <td><a  class="btn-floating "><i class="material-icons">delete</i></a></td>
    </thead>
    <?php endforeach ?>
  
      </table>
    
</div>
<?php
$this->endBlock();

?> -->
<h1></h1>
<button class="btn btn-success" id="btn">Статистика</button>
