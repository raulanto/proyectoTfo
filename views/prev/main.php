<?php

use app\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/logo.svg')]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body id="page-top">
    <?php $this->beginBody() ?>
    <?php require_once('pre_Nav.php') ?>
    <?php require_once('pre_header.php') ?>
    <?= $this->blocks['bodyEndScript'] ?? '' ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>