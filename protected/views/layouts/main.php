<?php
/**
 * @var CWebApplication $app
 */
$app = Yii::app();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />
  <title><?= $app->params['metaTitle']; ?> </title>
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="" />
  <meta http-equiv="Content-Language" content="ru" />
  <meta name="description" content="<?= $app->params['metaDescription'] ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta property="og:title" content="<?= $app->params['metaTitle']; ?>"/>
  <meta property="og:description" content="<?= $app->params['metaDescription']; ?>"/>
  <meta property="fb:app_id" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="<?= $app->params['siteHost']; ?>"/>
  <link rel="icon" type="image/x-icon" href="">
  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch/" title="<?= $app->params['siteHost']; ?>" />

	<!-- blueprint CSS framework -->
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/screen.css" media="screen, projection" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />-->
	<![endif]-->

<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/main.css" />-->
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/form.css" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pl1.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="homepage">

<!--<div class="container" id="page">-->

	<?php
  /*$this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	));*/
  ?><!-- breadcrumbs -->

	<?php echo $content; ?>

<footer class="footer-container">
  <div class="container-fluid container-fluid-sm">
    <div class="row footerlinks">
      <div class="col-item hidden-xs">
        <h5>Znajdź nas na:</h5>
        <a class="facebook-logo" href="<?= $app->params['social']['fb']['page'] ?>" target="_blank"><span class="icon-facebook2"></span>Facebook</a>
        <a class="youtube-logo" href="<?= $app->params['social']['youtube']['page'] ?>" target="_blank"><span class="icon-youtube"></span>Youtube</a>
      </div>
      <div class="col-item inline">
        <h4 class="strong-upper"><?= $app->params['siteName'] ?></h4>
        <ul>
          <li><a href="/help" target="_blank" title="<?= __('Справка') ?>"><?= __('Справка') ?></a></li>
          <li><a href="/contact" title="<?= __('Свяжтесь с нами') ?>"><?= __('Свяжтесь с нами') ?></a></li>
          <li><a href="/partnership" title="<?= __('Реклама и партнёрка') ?>"><?= __('Реклама и партнёрка') ?></a></li>
          <li><a href="/dealers" title="<?= __('Для салонов и торговых представителей') ?>"><?= __('Для салонов и торговых представителей') ?></a>
          </li>
          <li><a href="/news" title="<?= __('Новости') ?>"><?= __('Новости') ?></a></li>
          <li><a href="/cookies" title="<?= __('Политика конфиденциальности') ?>"><?= __('Политика конфиденциальности') ?></a></li>
          <li><a href="/terms" title="<?= __('Условия пользования') ?>"><?= __('Условия пользования') ?></a>
          </li>
          <li><a href="/terms_business" title="<?= __('Условия пользования для салонов и торговых представителей') ?>"><?= __('Условия пользования для салонов и торговых представителей') ?></a>
          </li>
        </ul>
      </div>
      <div class="col-item  inline">
        <h4 class="strong-upper"><?= __('Наши услуги') ?></h4>
        <ul>
          <li>
            <a href="/documents/sale_contract" target="_blank" title="<?= __('Догговор купли-продажи') ?>"><?= __('Догговор купли-продажи') ?></a>
          </li>
        </ul>
      </div>
      <div class="col-item hidden-xs">
        <h4 class="strong-upper"><?= __('Полезная информация') ?></h4>
        <ul>
          <li><a target="_blank" href="/document/prices" title="<?= __('Прайсы') ?>"><?= __('Прайсы') ?></a></li>

          <li><a target="_blank" href="/pdf" title="<?= __('Журнал') ?>"><?= __('Журнал') ?></a></li>
          <li><a target="_blank" href="/testdrive" title="<?= __('Тест-драйвы') ?>"><?= __('Тест-драйвы') ?></a>
          </li>
          <li><a target="_blank" href="/reviews" title="<?= __('Отзывы о моделях') ?>"><?= __('Отзывы о моделях') ?></a></li>
          <li><a target="_blank" href="/rating" title="<?= __('Рейтинги') ?>"><?= __('Рейтинги') ?></a></li>
          <li><a href="/sitemap/" title="<?= __('Карта сайта') ?>"><?= __('Карта сайта') ?></a></li>
          <li><a href="/sitemap/regions/" title="<?= __('Регионы') ?>"><?= __('Регионы') ?></a></li>
          <li><a href="/document/important" target="_blank" title="<?= __('Прочая информация') ?>"><?= __('Прочая информация') ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="col-sm-12 footer-logo hidden-xs hidden-sm">
  <img src="/static/otomotopl/naspersclassifieds-regional/verticals-cars-atlas-web-otomotopl/static/img/otomoto-footer.png">
</div>
<div class="modal fade" id="postAdLayer" tabindex="-1" role="dialog" aria-labelledby="basicModal"
     aria-hidden="true">
  <div class="modal-dialog postad-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close icon-zamknij" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title"><?= __('Выберите категорию') ?></h4>
      </div>
      <div class="modal-body">
        <div class="postad-dialog-content">
          <ul class="category-select postad-dialog-content-cell">
            <li>
              <a class="cat" href="/advert/add/car">
                <span class="car-type icon-osobowe"></span><?= __('Легковые') ?>
              </a>
            </li>
          </ul>
          <div class="professional-account postad-dialog-content-cell">
            <h4><?= __('Являетесь торговым представителем?') ?></h4>
            <div>
              <a href="/login" class="om-button"><?= __('Войти') ?></a>
            </div>
            <span>lub</span>
            <div>
              <a href="/registration_dealer/" class="om-button blue"><?= __('Регистрация для торговых представителей') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="message_system" style="display: none">
  <div class="messagesystem">
    <p>
      <span class="msg"></span>
    </p>
  </div>
</div>
<div id="dialogMessage" class="hidden">
  <div class="inner"></div>
</div>
<div id="saveFavDiv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close icon-zamknij" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title typeSearch"><?= __('Сохраненные критерии поиска') ?></h4>
        <h4 class="modal-title typeOffer"><?= __('Избранные объявления') ?></h4>
      </div>
      <div class="modal-body">
        <div class="modal-inner">
          <h4 class="typeSearch"><?= __('Критерии поиска были сохранены') ?></h4>
          <h4 class="typeOffer"><?= __('Объявление добавлено в избранные') ?></h4>
          <p><?= __('Войти и запомнить') ?></p>
          <div class="modal-actions">
            <div class="modal-actions-row">
              <a class="om-button" href="/login"><?= __('Войти') ?></a>
              <a class="om-button" href="/register"><?= __('Регистрация') ?></a>
            </div>
            <div class="modal-actions-row">
              <a id="saveFavCancel" href=""><?= __('Нет, спасибо') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="synchroFavDiv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close icon-zamknij" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title typeSearch"><?= __('Избранные объявления и критерии поиска') ?></h4>
      </div>
      <div class="modal-body">
        <div class="modal-inner">
          <div class="inner"></div>
          <p><?= __('Войти и запомнить') ?></p>
          <div class="modal-actions">
            <div class="modal-actions-row">
              <a id="synchronizeObservedConfirm" class="om-button" href=""><?= __('Добавить в избранное') ?></a>
            </div>
            <div class="modal-actions-row">
              <a id="synchronizeObservedCancel" href=""><?= __('Нет, спасибо') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--</div>--><!-- page -->
<script type="text/javascript" src="/js/swd5459e122b1098192c59d7c539bd63dd.js"></script>
<script type="text/javascript" src="/js/sw356e03ea275d966254cc5c1536059b3a.js"></script>

</body>
</html>
