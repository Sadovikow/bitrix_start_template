<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE HTML>

<!— Содержание хедера++ —>
<html lang="<?=LANGUAGE_ID;?>">
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/jquery-2.2.2.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/jquery.fullPage.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/script.js');
    CJSCore::Init(array('scripts')); // Инициализация скриптов в /js/include.php
    ?>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <header>
    </header>
    <div class="container">
    <!— Содержание хедера— —>

    <!— Содержание страницы++ —>
        <main>

        <div id="fullpage_med">
