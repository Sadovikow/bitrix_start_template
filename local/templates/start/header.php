<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID;?>">
    <head>
        <title><?$APPLICATION->ShowTitle()?></title>
        <?$APPLICATION->ShowHead();
        use Bitrix\Main\Page\Asset;
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/script.js');
        CJSCore::Init(array('scripts')); // Инициализация скриптов в /js/include.php?>
    <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-96x96.png" sizes="96x96">
    <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH?>/img/favicon-96x96.png">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
    </head>
    
    <body>
        <?$APPLICATION->ShowPanel();?>
        <div class="container">
