

<?php
$this->title = 'landing';
?>
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="hhh">
<div>
    <h1 class="center-align">День открытых дверей</h1>
    <h1 class="center-align">25 november</h1>
    <h1 class="center-align">10:00</h1>
  </div>
  <div align="center"><p><a class="btn btn-default" href="#form">Регистрация</a></p></div>
  <div class="card-panel hoverable" > <p class="center-align"><img src="https://icon-icons.com/icons2/936/PNG/32/angle-arrow-down_icon-icons.com_73683.png" /> </p></div>
 
</div>


<div class="container">
<div  class="card-panel hoverable">
<div class='body-content'>
  
    <h1>Что будет на мероприятии?</h1>
    <h2>Регистрация</h2>
      <p>Вы получите сувениры нашего колледжа, а так же нашу газету и  буклеты.</p>
    <h2>Официальная часть</h2>
    <ul>
        <li>-речь директора колледжа</li>
        <li>-презентация о направлениях и специальностях</li>
        <li>-рассказ о студенческих мероприятиях, дополнительном образовании в колледже</li>
          <li>-информация о подготовительных курсах</li>
         <li>-презентация правил поступления и подачи документов.</li>
       </ul>
     <h2>Экскурсия по колледжу</h2>
   <ul>
    <li>-посещение аудиторий и лабороторий колледжа</li>
    <li>-возможность самостоятельно попробывать свои силы в программировнии </li>
    <li>-изучение структуры обучения .</li>
 </ul>
</div>
<p align="center"><a class="btn btn-default" href="#form">Регистрация</a></p>
</div>
</div>

<div class="container">
<div  class="card-panel hoverable">
<h1>Выступят с речью:</h1>
<div class="container">
  <div class="row">
    <div class="col">
    <p><img src="http://rksi.ru/img/pages/director.jpg" width="128" height="128"  align="left"/> </p>
    </div>
    <div class="col">
      <p>Горбунов Сергей Николаевич </p>
    <p style="margin-left: 10em; margin-top:20px;">Директор РКСИ</p>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <p><img src="http://rksi.ru/__image.php?width=80&image=/img/sotri/fil.jpg" width="128" height="128"  align="left"/> </p>
    </div>
    <div class="col">
    <p >Филиппенко Михаил Юрьевич</p>
    <p style="margin-left: 10em; margin-top:20px;">Зав. кафедрой программирования и компьютерных систем</p>
    </div>
    
  </div>

  <div class="row">
    <div class="col">
    <p><img src="http://rksi.ru/__image.php?width=80&image=/img/sotri/kom.jpg" width="128" height="128"  align="left"/></p>
    </div>
    <div class="col">
      <p>Комова Ольга Валерьевна</p>
    <p style="margin-left: 10em; margin-top:20px;">Ответсвенный секретарь приемной комиссии</p>
    </div>
  </div>
</div>
  <p align="center"><a class="btn btn-default" href="#form">Регистрация</a></p>
</div>
</div>


<div class="container">
<div  class="card-panel hoverable">
<h1>Почему стоит поступить в РКСИ:</h1>
</div>
</div>

<div class="container">
<div  class="card-panel hoverable">
  <h1 align="center">Специальности </h1>
  <h4 margin-top:10ep;>Направления: </h4>

 
</div>
</div>

<div class="container">
<div  class="card-panel hoverable">
  <div>
    <h5 class="center-align"><a name="form">Регистрация</a></h5>
  </div>
<?php if(Yii::$app->session->hasFlash('success')): ?>
<?php echo Yii::$app->session->getFlash('success'); ?>
<?php endif; ?>
<?php if(Yii::$app->session->hasFlash('error')): ?>
<?php echo Yii::$app->session->getFlash('error'); ?>
<?php endif; ?>
<?php
//создание форм
$form=ActiveForm::begin(['options'=>['id'=>'testForm']])
?>
<?= $form->field($model,'surname')?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'lastname')?>
<?php 
 $items = [
      '0' => '11.02.09 «Многоканальные телекоммуникационные системы»',
      '1' => '11.02.10 «Радиосвязь, радиовещание и телевидение»',
      '2' => '11.02.12 «Сети связи и системы коммутации»',

      '3' => '09.02.02 «Компьютерные сети»',
      '4' => '09.02.03 «Программирование в компьютерных системах»',
      '5' => '09.02.05 «Прикладная информатика (по отраслям)»',
      '6'=> '10.02.04 «Обеспечение информационной безопасности телекоммуникационных систем»',
      '7' => '10.02.05 «Обеспечение информационной безопасности автоматизированных систем»',
 
      '8' => '38.02.07 «Банковское дело»',
      '9' => '38.02.04 «Коммерция (по отраслям)»',
      '10' => '38.02.01 «Экономика и бухгалтерский учет (по отраслям)»',
 
        '11' => '11.02.12 «Почтовая связь»',

];
$params = [
  'prompt' => 'Выберите направление...'
];
echo $form->field($model, 'orientation1')->dropDownList($items,$params);
?>
<?php 

// foreach ($db as $mod){
//   echo '<ul>';
//       echo '<li>' . $mod->name . '</li>';
//       echo '</ul>';
// }
?>
<?php  //$form->filed($model,'orientation') ?>

<?=  $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
  'mask' => '+7 (999) 999 99 99',]); ?>
  
<?= $form->field($model,'email')->input('email') ?>
<?= $form->field($model,'klass')?>
<?= $form->field($model,'GPA')?>
<?= Html::submitButton('Регистрация',['class'=>'btn btn-saccess'])?>

<?php
ActiveForm::end()
?>
</div>
<div id="map" style="height: 400px"></div>

