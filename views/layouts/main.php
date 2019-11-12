<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'User', 'url' => ['/users/index']],
            ['label' => 'Surat Masuk', 'url' => ['/surat_masuk/index']],
            ['label' => 'Surat Keluar', 'url' => ['/surat_keluar/index']],
            ['label' => 'Kategori Surat Keluar', 'url' => ['/kategori_surat_keluar/index']],
            ['label' => 'Sifat', 'url' => ['/sifat/index']],
            ['label' => 'Kategori Surat', 'url' => ['/kategori_surat/index']],
            ['label' => 'Jabatan User', 'url' => ['/jabatan_users/index']],
            ['label' => 'Jabatan ', 'url' => ['/jabatan/index']],
            ['label' => 'Instansi ', 'url' => ['/instansi/index']],
            ['label' => 'Golongan ', 'url' => ['/golongan/index']],
            ['label' => 'DisPos Masuk ', 'url' => ['/disposisi_surat_masuk/index']],
            ['label' => 'DisPos Rules Node ', 'url' => ['/disposisi_rules_node/index']],
            ['label' => 'DisPos Rules Edge ', 'url' => ['/disposisi_rules_edge/index']],
            ['label' => 'Approval Surat Keluar ', 'url' => ['/approval_surat_keluar/index']],
            ['label' => 'Approval Rules Edge ', 'url' => ['/approval_rules_edge/index']],
            ['label' => 'Appoval Rules Node ', 'url' => ['/appoval_rules_node/index']],

            

            

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
