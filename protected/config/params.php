<?php

// this contains the application parameters that can be maintained via GUI
return array(
	// this is displayed in the header section
	'metaTitle'=>'TransBoard - новые и подержанные транспортные средства а также запчасти к ним.',
	'metaDescription'=>'TransBoard - Доска объявлений: новые и подержанные транспортные средства и запчасти к ним в Украине.',
	'siteName'=>'TransBoard',
	'siteHost'=>'transboard.int',
	// this is used in error pages
	'adminEmail'=>'yonkon.ru@gmail.com',
	// number of posts displayed per page
	'perPage'=>10,
  'social' => array(
    'fb' => array(
      'page' => 'https://www.facebook.com/transboard',
    ),
    'youtube' => array(
      'page' => 'https://www.facebook.com/transboard',
    ),
    'vk' => array(
      'page' => 'https://www.facebook.com/transboard',
    ),
    'g+' => array(
      'page' => 'https://www.facebook.com/transboard',
    ),
  ),
	// the copyright information displayed in the footer section
  'photos' => array(
    'thumbs' => array(
      'width' => 140,
      'height' => 90,
    ),
    'upload_path' => $_SERVER['DOCUMENT_ROOT'] . '/images/ad/',
    'upload_url' => '/images/ad/',
  ),
	'copyrightInfo'=>'Copyright &copy; 2016 by Vladimir Sudarkov.',

);
