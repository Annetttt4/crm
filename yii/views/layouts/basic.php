<?php


use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->charset ?>">
<head class="head">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?= Html::csrfMetaTags() ?>
<title><?php Html::encode($this->title)  ?></title>
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandUrl' => Yii::$app->homeUrl,
        'brandLabel' =>  '<img src="https://i.mycdn.me/i?r=AzGBqNaF5OQp2lMpnhRx4DEFFmN5N-nUFxIKcy6LwB2rMZzkkwNsKe2Co2zfT36qJSc" style="display:inline; vertical-align: top; height:32px;">',
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['']],
            ['label' => 'Lending', 'url' => ['/my/index']],
            ['label' => 'Crm', 'url' => ['/show/show']],
            [
              'label' => 'Тел.: (863) 294-71-47',
              'url' => ['#'],
          ]
            
        ],
     
    ]);
    NavBar::end();
    ?>

<?php if(isset($this->blocks['block1'])): ?>
<?php echo $this->blocks['block1'] ?>
<?php endif; ?>

<?= $content ?>
</div>
</div>
<script src="https://api-maps.yandex.ru/2.0-stable/?apikey=<df179c3a-88ee-4058-90a4-bd2188f4f10a>&load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap;

    function init(){     
        myMap = new ymaps.Map ("map", {
            center: [47.214921, 39.704898],
            zoom: 50
        });
      myPlacemark = new ymaps.Placemark([55.76, 37.64], { content: 'Москва!', balloonContent: 'Столица России' });
      myMap.geoObjects.add(myPlacemark);
  }
</script>
<footer class="footer">
  <div  class="card-panel hoverable">
    <div class="container">
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Адрес колледжа<br>ул. Тургеневская, 10/6, <br> г. Ростов-на-Дону, 344082</th>
      <th scope="col">Приемная комиссия<br>Тел.: (863) 294-71-47</th>
      <th scope="col">Официальный сайт<br>http://rksi.ru/</th>
      <th scope="col"><br><a href="https://vk.com/pkcu_college" ><img src="https://icon-icons.com/icons2/832/PNG/32/vk_icon-icons.com_66681.png"></a>
       <a href="https://www.instagram.com/rksi_ru/" ><img src="https://icon-icons.com/icons2/791/PNG/32/instagram_f_icon-icons.com_65485.png"></a>
       <a href="https://t.me/rksi_ru" ><img src="https://icon-icons.com/icons2/923/PNG/32/telegram_icon-icons.com_72055.png"></a></th>
    </tr>
  </thead>
      </table>
      </div>
      </div>
      
</footer>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>