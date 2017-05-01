<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'feedback';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="container container-fluid">
        <!-- box-intro -->
        <section class="box-intro">
            <div class="table-cell">
                <div class="row">
                    <div class="col-md-6">
                                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                    <?=
                    $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ])
                    ?>

                    <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-md-6 text-left">
                        <h3>Hello, friends!</h3> 
                        <p>My name is Evgeniy.</p>
 <p>I'm a photographer, designer and retoucher. I am creating an informative and aesthetic image, which will help you achieve your goals. I keep studying and improving my skills. 
     I realize their creative ideas, trying to find a unique and effective solutions for each problem. 
     I like to work in a completely unusual context. 
     I have a penchant for the symbolic, associative thinking, a willingness to switch quickly from one idea to another. 
     I try to use a variety of strategies to solve goals, not follow stereotypes. </p>
<p>By education I am a programmer, I have the experience of creating .Net and Web-based applications, including the MVC architecture, Landing page, Front-end and Back-end.</p>
<p>I work with Adobe Photoshop, Adobe Illustrator, Adobe Flash, Wordpress, Opencart, YII Framework 2.0., PHP, JavaScript, HTML, CSS, C #, VB. </p>
<h4>I do not take my work that I can not fulfill.</h4>

                        
                    </div>
                </div>
                
            </div>
        </section>
        <!-- end box-intro -->
    </div>
</div>
