<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
        
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GetPicture.CLUB</title>
    <link rel="icon" href="http://getpicture.club/img/fav.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="web/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="web/css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script async="" src="web/js/analytics.js"></script>
    <script src="web/js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

    <body class="" style="overflow: visible;">

<?php $this->beginBody() ?>
        
                <!-- Preloader -->
        <div id="preloader" style="display: none;">
            <div class="pre-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- end Preloader -->

        <!-- box header -->
        <header class="">
<?php 

    NavBar::begin([
        'brandLabel' => 'You made the right choice',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Main', 'url' => ['/site/index']],
            ['label' => 'Team', 'url' => ['/site/team']],
            ['label' => 'Contacts', 'url' => ['/site/contact']],
            
            // Убираем пунк меню авторизации
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Вход', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
//                . Html::submitButton(
//                    'Выход (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
        ],
    ]);
    NavBar::end();

    ?>
				</header>
        <!-- end box header -->

        <?= $content ?>

<?php $this->endBody() ?>
        

        <!-- footer -->
        <footer>
            <div class="container-fluid">
                <p class="copyright">2016 © GetPicture.club</p>
            </div>
        </footer>
        <!-- end footer -->




        <!-- back to top -->
        <a href="http://getpicture.club/#0" class="cd-top cd-is-visible cd-fade-out"><i class="fa fa-arrow-up"></i></a>
        <!-- end back to top -->



        <!-- jQuery -->
        <script src="web/js/jquery-2.1.1.js"></script>
        <!--  plugins -->
        <script src="web/js/bootstrap.min.js"></script>
        <script src="web/js/menu.js"></script>
        <script src="web/js/animated-headline.js"></script>
        <script src="web/js/isotope.pkgd.min.js"></script>


        <!--  custom script -->
        <script src="web/js/custom.js"></script>
<?php $this->endPage() ?>






    </body>
</html>