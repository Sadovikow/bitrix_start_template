<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE HTML>
<html xmlns:og="http://ogp.me/ns#" lang="<?=LANGUAGE_ID;?>">
    <head>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta charset="UTF-8">
        <title><?$APPLICATION->ShowTitle()?></title>
        <?$APPLICATION->ShowHead();
        use Bitrix\Main\Page\Asset;
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/script.js');
        CJSCore::Init(array('scripts')); // Scripts in /js/include.php 
        ?>
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/mobile.css?<?=rand(9,912321319);?>">
        <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-96x96.png" sizes="96x96">
        <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-96x96.png">
        <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="format-detection" content="telephone=no">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.yoursite.ru/">
        <meta property="og:title" content="Your site">
        <meta property="og:description" content="<?$APPLICATION->ShowProperty('description');?>">
        <meta property="og:image" content="https://www.yoursite.ru/logo.png">
    </head>
    
    <body>
        <?$APPLICATION->ShowPanel();?>
        <div class="container">
