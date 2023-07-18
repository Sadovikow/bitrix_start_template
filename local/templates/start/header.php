<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

define("SITE_SERVER_PROTOCOL", (CMain::IsHTTPS()) ? "https://" : "http://"); // Переменная определяет протокол, по которому работает ваш сайт
$curPage = $APPLICATION->GetCurPage(); // Получаем текущий адрес страницы
?>
<!DOCTYPE HTML>
<html xmlns:og="http://ogp.me/ns#" lang="<?=LANGUAGE_ID;?>">
    <head>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta charset="UTF-8">
        <title><?$APPLICATION->ShowTitle()?></title>
        <?
        $APPLICATION->ShowHead();
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/functions.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
        CJSCore::Init(array('scripts')); // /js/include.php (slick, masks, default functions)
        CJSCore::Init(array("fx"));
        ?>
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/mobile.css">
        <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-96x96.png" sizes="96x96">
        <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-96x96.png">
        <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="format-detection" content="telephone=no">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= SITE_SERVER_PROTOCOL . SITE_SERVER_NAME . $curPage ?>">
        <meta property="og:title" content="<? $APPLICATION->ShowProperty("title") ?>">
        <meta property="og:description" content="<? $APPLICATION->ShowProperty('description'); ?>">
        <meta property="og:image" content="<?=SITE_SERVER_PROTOCOL.SITE_SERVER_NAME?>/logo.png">
    </head>
    
    <body>
        <?$APPLICATION->ShowPanel();?>
        <div class="container">
