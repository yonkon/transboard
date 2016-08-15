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
  <meta property="og:site_name" content="<?= $app->params['siteHost']; ?>"/>
  <link rel="icon" type="image/x-icon" href="">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/pl1.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="homepage">

<div class="container" id="page">

	<?php echo $content; ?>

</div>

</body>
</html>
