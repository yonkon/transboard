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

	<div id="footer">
	</div><!-- footer -->

<!--</div>--><!-- page -->
<script type="text/javascript" src="/js/swd5459e122b1098192c59d7c539bd63dd.js"></script>
<script type="text/javascript" src="/js/sw356e03ea275d966254cc5c1536059b3a.js"></script>

</body>
</html>
