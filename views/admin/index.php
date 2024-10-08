<?php

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $model \humhubContrib\auth\facebook\models\ConfigureForm */

use humhub\modules\ui\icon\widgets\Icon;
use yii\bootstrap\ActiveForm;
use humhub\widgets\Button;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Yii::t('AuthFacebookModule.base', '<strong>Facebook</strong> Sign-In configuration') ?></div>

        <div class="panel-body">
            <p>
                <?= Button::asLink(Icon::get('cog'))
                ->link(Url::to(['widget']))
                ->cssClass('pull-right btn btn-default')
                ->tooltip(Yii::t('AuthFacebookModule.base', 'Widget Settings')) ?>
                <?= Button::asLink(Icon::get('facebook'))
                ->link('https://developers.facebook.com/docs/facebook-login/overview')
                ->cssClass('pull-right btn btn-default')
                ->options(['target' => '_blank'])
                ->tooltip(Yii::t('AuthFacebookModule.base', 'Facebook Documentation')) ?>
                <?= Yii::t('AuthFacebookModule.base', 'Please follow the Facebook instructions to create the required <strong>OAuth client</strong> credentials.'); ?>
                <br/>
            </p>
            <br/>

            <?php $form = ActiveForm::begin(['id' => 'configure-form', 'enableClientValidation' => false, 'enableClientScript' => false]); ?>

            <?= $form->field($model, 'enabled')->checkbox(); ?>

            <br/>
            <?= $form->field($model, 'clientId'); ?>
            <?= $form->field($model, 'clientSecret'); ?>

            <br />
            <?= $form->field($model, 'redirectUri')->textInput(['readonly' => true]); ?>
            <br/>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('base', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => '']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
